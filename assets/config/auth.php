<?php

return [
    'domains' => [
        'default' => [

            // use the ORM user repository
            'repository' => 'framework.orm.user',

            // Here we define the ways with which a user can authenticate
            'providers'  => [

                // Enable session support
                'session' => [
                    'type' => 'http.session'
                ],

                // And password login
                'password' => [
                    'type' => 'login.password',

                    // When a password login is successful persist the user in the session
                    'persistProviders' => ['session']
                ]
            ]
        ]
    ]
];