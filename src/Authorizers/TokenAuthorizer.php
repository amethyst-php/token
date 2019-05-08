<?php

namespace Railken\Amethyst\Authorizers;

use Illuminate\Support\Collection;
use Railken\Bag;
use Railken\Lem\Authorizer;
use Railken\Lem\Contracts\EntityContract;
use Railken\Lem\Tokens;

class TokenAuthorizer extends Authorizer
{
    const PERMISSION_TYPE_PRIVATE = 'token.type.private';

    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE     => 'token.create',
        Tokens::PERMISSION_UPDATE     => 'token.update',
        Tokens::PERMISSION_SHOW       => 'token.show',
        Tokens::PERMISSION_REMOVE     => 'token.remove',
        self::PERMISSION_TYPE_PRIVATE => 'token.type.private',
    ];

    /**
     * @param string                         $action
     * @param \Railken\Amethyst\Models\Token $entity
     * @param Bag                            $parameters
     *
     * @return Collection
     */
    public function authorizeTypeId(string $action, EntityContract $entity, Bag $parameters)
    {
        $errors = new Collection();
        $permission = $this->getPermission(self::PERMISSION_TYPE_PRIVATE);

        // Regardless of the action, if the type is private check permission

        if ($parameters->get('type')) {
            $type = (object) $parameters->get('type');
        } elseif ($parameters->get('type_id')) {
            $typeManager = $this->getManager()->getAttributes()->filter(function ($attribute) {
                return $attribute->getName() === 'type_id';
            })->first()->getRelationManager($entity);

            $type = $typeManager->getRepository()->findOneById($parameters->get('type_id'));
        } else {
            $type = $entity->type;
        }

        if ($type && intval($type->public) === 0 && !$this->getManager()->getAgent()->can($permission)) {
            $errors->push($this->newException(Tokens::NOT_AUTHORIZED, $permission));
        }

        return $errors;
    }
}
