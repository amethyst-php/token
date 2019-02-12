<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\TokensController::class,
    'router'     => [
        'as'     => 'token.',
        'prefix' => '/tokens',
    ],
];
