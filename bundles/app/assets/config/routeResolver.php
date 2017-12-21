<?php

return array(
    'type'      => 'group',
    'defaults'  => array('action' => 'default'),
    'resolvers' => array(
        
        'action' => array(
            'path' => '<processor>/<action>'
        ),

        'welcome' => array(
            'path'     => '(<processor>)',
            'defaults' => array('processor' => 'welcome')
        ),
        'messages' => array(
            'path' => '(<processor>)',
            'defaults' => ['processor' => 'messages']
        ),
        'login' => array(
            'path' => 'login',
            'default' => ['processor' => 'login']
        ),
        'register' => array(
            'path' => 'register',
            'default' => ['processor' => 'register']
        )
    )
);
