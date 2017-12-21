<?php
/**
 * @Author
 * Falua Temitope Oyewole.
 * faluatemitopeo@gmail.com
 * Web Developer
 * Date: 12/21/2017
 */

namespace Project\App\HTTP;

use PHPixie\HTTP\Request;

class Messages extends Processor
{
    /**
     * @param Request $request HTTP Request
     * @return mixed
     */
    public function defaultAction($request) {
        $components = $this->components();

        $message = $components->orm()->query('message')
            ->orderDescendingBy('date')->find();

        return $components->template()->get('app:messages', ['messages' => $message]);
    }
}