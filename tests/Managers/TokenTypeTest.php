<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\TokenTypeFaker;
use Railken\Amethyst\Managers\TokenTypeManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class TokenTypeTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = TokenTypeManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = TokenTypeFaker::class;
}
