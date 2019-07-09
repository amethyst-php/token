<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\TokensController::class,
    'router'     => [
        'as'     => 'token.',
        'prefix' => '/tokens',
    ],
];
