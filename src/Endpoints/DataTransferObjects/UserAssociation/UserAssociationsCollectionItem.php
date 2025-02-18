<?php

declare(strict_types=1);

namespace Pingen\Endpoints\DataTransferObjects\UserAssociation;

use Pingen\Endpoints\DataTransferObjects\General\ItemLinks;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Class UserAssociationItem
 * @package Pingen\Models
 */
class UserAssociationsCollectionItem extends DataTransferObject
{
    public string $type;

    public string $id;

    public array $meta;

    public UserAssociationAttributes $attributes;

    public ?ItemLinks $links;

    public ?UserAssociationRelationships $relationships;
}
