<?php

namespace Railken\Amethyst\Tests\Http\User;

use Railken\Amethyst\Concerns\Auth\User as Model;

class User extends Model
{
    public function can($ability, $arguments = [])
    {
        if ($ability === 'token.type.private') {
            return false;
        }

        return true;
    }
}
