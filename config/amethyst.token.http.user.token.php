<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\User\TokensController::class,
    'router'     => [
        'as'     => 'token.',
        'prefix' => '/tokens',
    ],
];
