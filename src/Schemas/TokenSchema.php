<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\TokenTypeManager;
use Illuminate\Support\Facades\Config;
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
        $tokenizableConfig = Config::get('amethyst.token.data.token.attributes.tokenizable.options');

        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('token')
                ->setDefault(function ($entity, $attribute) {
                    return $attribute->getManager()->getRepository()->generateToken();
                }),
            Attributes\BelongsToAttribute::make('type_id')
                ->setRelationName('type')
                ->setRelationManager(TokenTypeManager::class)
                ->setRequired(true),

            Attributes\EnumAttribute::make('tokenizable_type', array_keys($tokenizableConfig))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('tokenizable_id')
                ->setRelationKey('tokenizable_type')
                ->setRelationName('tokenizable')
                ->setRelations($tokenizableConfig)
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
