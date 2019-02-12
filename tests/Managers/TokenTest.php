<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\TokenFaker;
use Railken\Amethyst\Managers\TokenManager;
use Railken\Amethyst\Tests\BaseTest;
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
