<?php

namespace Railken\Amethyst\Tests\Http\User;

use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Api\Support\Testing\TestableBaseTrait;
use Railken\Amethyst\Fakers\TokenFaker;
use Railken\Amethyst\Fakers\TokenTypeFaker;
use Railken\Amethyst\Managers\TokenTypeManager;
use Railken\Amethyst\Tests\BaseTest;
use Symfony\Component\HttpFoundation\Response;

class TokenTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = TokenFaker::class;

    /**
     * Router group resource.
     *
     * @var string
     */
    protected $group = 'user';

    /**
     * Route name.
     *
     * @var string
     */
    protected $route = 'user.token';

    /**
     * @return array
     */
    public function getFakerParameters($public = 1)
    {
        $parameters = $this->faker::make()->parameters();

        $type = (new TokenTypeManager())->createOrFail(TokenTypeFaker::make()->parameters()->set('public', $public))->getResource();

        $parameters->remove('type');
        $parameters->set('type_id', $type->id);
        return $parameters->toArray();
    }


    public function setUp()
    {
        parent::setUp();

        config(['amethyst.authentication.entity' => User::class]);
        Config::set(['amethyst.authentication.entity' => User::class]);
        config(['auth.providers.users.model' => Config::get('amethyst.authentication.entity')]);


        $this->artisan('passport:install');
        $this->artisan('amethyst:user:install');

        $response = $this->post(route('app.auth.basic'), [
            'username' => 'admin@admin.com',
            'password' => 'vercingetorige',
        ]);


        $response->assertStatus(200);
        $access_token = json_decode($response->getContent())->data->access_token;

        $this->withHeaders([
            'Authorization' => 'Bearer '.$access_token,
        ]);
    }

    protected function getPackageProviders($app)
    {
        return array_merge(parent::getPackageProviders($app), [
            \Railken\Amethyst\Providers\AuthenticationServiceProvider::class
        ]);
    }

    public function testPermissions()
    {
        $routeName = $this->getRoute();

        $this->callAndTest('POST', route($routeName.'.create'), $this->getFakerParameters(0), Response::HTTP_BAD_REQUEST);
    }
}
