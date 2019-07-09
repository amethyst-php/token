<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\TokenTypeFaker;
use Amethyst\Managers\TokenTypeManager;
use Amethyst\Tests\BaseTest;
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
