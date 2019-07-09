<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\User\TokensController::class,
    'router'     => [
        'as'     => 'token.',
        'prefix' => '/tokens',
    ],
];
