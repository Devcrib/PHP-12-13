<?php

namespace Project\App\HTTP;

use PHPixie\HTTP\Request;

/**
 * Simple greeting web page
 */
class Welcome extends Processor
{
    /**
     * Default action
     * @param Request $request HTTP request
     * @return mixed
     */
    public function defaultAction($request)
    {
        $template = $this->components()->template();

        $container = $template->get('app:welcome');
        return $container;
    }
}