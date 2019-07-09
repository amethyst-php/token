<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class TokenFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('token', 'abc');
        $bag->set('type', TokenTypeFaker::make()->parameters()->toArray());
        $bag->set('tokenizable_type', \Amethyst\Models\User::class);
        $bag->set('tokenizable', UserFaker::make()->parameters()->toArray());

        return $bag;
    }
}
