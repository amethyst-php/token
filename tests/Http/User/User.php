<?php

namespace Amethyst\Tests\Http\User;

use Amethyst\Models\User as Model;

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
