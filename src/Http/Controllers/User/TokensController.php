<?php

namespace Amethyst\Http\Controllers\User;

use Amethyst\Core\Http\Controllers\RestManagerController;
use Amethyst\Core\Http\Controllers\Traits as RestTraits;
use Amethyst\Managers\TokenManager;
use Illuminate\Support\Facades\Config;

class TokensController extends RestManagerController
{
    use RestTraits\RestCommonTrait;

    /**
     * The class of the manager.
     *
     * @var string
     */
    public $class = TokenManager::class;

    /**
     * Create a new instance.
     */
    public function __construct()
    {
        $this->middleware('auth:api');

        parent::__construct();

        $this->middleware(function ($request, $next) {
            // Cannot create new types and tokenizable
            $request->request->remove('type');
            $request->request->remove('tokenizable');
            $request->request->remove('tokenizable_id');
            $request->request->remove('tokenizable_type');

            $request->request->add([
                'tokenizable_type' => 'user',
                'tokenizable_id'   => $this->getUser()->id,
            ]);

            return $next($request);
        });
    }

    /**
     * Create a new instance for query.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function getQuery()
    {
        // Retrieve only token related to user and that are public

        return $this->getManager()
            ->getRepository()
            ->getQuery()
            ->leftJoin(
                Config::get('amethyst.token.data.token-type.table').' as tt',
                'tt.id',
                '=',
                Config::get('amethyst.token.data.token.table').'.type_id'
            )
            ->where('tt.public', 1)
            ->where('tokenizable_type', 'user')
            ->where('tokenizable_id', $this->getUser()->id);
    }
}
