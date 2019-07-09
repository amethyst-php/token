<?php

namespace Amethyst\Repositories;

use Railken\Lem\Repository;
use Ramsey\Uuid\Uuid;

class TokenRepository extends Repository
{
    /**
     * Generate token.
     *
     * @return string
     */
    public function generateToken()
    {
        do {
            $token = Uuid::uuid4()->toString();
        } while ($this->newQuery()->where('token', $token)->get()->count() > 0);

        return $token;
    }
}
