<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\TokenTypesController::class,
    'router'     => [
        'as'     => 'token-type.',
        'prefix' => '/token-types',
    ],
];
