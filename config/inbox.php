<?php

return [

    'paginate' => 10,

    /*
    |--------------------------------------------------------------------------
    | Inbox Route Group Config
    |--------------------------------------------------------------------------
    |
    |
    */

    'route' => [
        'prefix' => 'inbox',
        'middleware' => ['web', 'auth'],
        'name' => null
    ],

    /*
    |--------------------------------------------------------------------------
    | Inbox Tables Name
    |--------------------------------------------------------------------------
    |
    | ..
    |
    */

    'tables' => [
        'threads' => 'threads',
        'messages' => 'messages',
        'participants' => 'participants',
    ],

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | If you want to overwrite any model you should change it here as well.
    |
    */

    'models' => [
        'thread' => Klongchu\Inbox\Models\Thread::class,
        'message' => Klongchu\Inbox\Models\Message::class,
        'participant' => Klongchu\Inbox\Models\Participant::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Inbox Notification
    |--------------------------------------------------------------------------
    |
    | Via Supported: "mail", "database", "array"
    |
    */

    'notifications' => [
        'via' => [
            'mail',
        ],
    ],
];
