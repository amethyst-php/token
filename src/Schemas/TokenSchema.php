<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\TokenTypeManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class TokenSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('token')
                ->setDefault(function ($entity, $attribute) {
                    return $attribute->getManager()->getRepository()->generateToken();
                })
                ->setRequired(true),
            Attributes\BelongsToAttribute::make('type_id')
                ->setRelationName('type')
                ->setRelationManager(TokenTypeManager::class)
                ->setRequired(true),
            \Amethyst\Core\Attributes\DataNameAttribute::make('tokenizable_type')
                ->setRequired(true),
            Attributes\MorphToAttribute::make('tokenizable_id')
                ->setRelationKey('tokenizable_type')
                ->setRelationName('tokenizable')
                ->setRelations(app('amethyst')->getDataManagers())
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
