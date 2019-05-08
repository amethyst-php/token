<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\TokenTypesController::class,
    'router'     => [
        'as'     => 'token-type.',
        'prefix' => '/token-types',
    ],
];
