<?php

namespace Project\App;

class HTTP extends \PHPixie\DefaultBundle\HTTP
{
    protected $classMap = array(
        'welcome' => 'Project\App\HTTP\Welcome',
        'messages' => 'Project\App\HTTP\Messages',
        'login' => 'Project\App\HTTP\Login',
        'register' => 'Project\App\HTTP\Register'
    );
}