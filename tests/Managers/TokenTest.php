<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\TokenFaker;
use Amethyst\Managers\TokenManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class TokenTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = TokenManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = TokenFaker::class;
}
