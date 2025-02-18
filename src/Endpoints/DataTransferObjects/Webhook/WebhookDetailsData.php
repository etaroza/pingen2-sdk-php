<?php

declare(strict_types=1);

namespace Pingen\Endpoints\DataTransferObjects\Webhook;

use Pingen\Endpoints\DataTransferObjects\General\ItemLinks;
use Pingen\Support\DataTransferObject;

/**
 * Class WebhookDetailsData
 * @package Pingen\DataTransferObjects\Letter
 */
class WebhookDetailsData extends DataTransferObject
{
    public ?string $id;

    public string $type;

    public WebhookAttributes $attributes;

    public ?ItemLinks $links;

    public ?WebhookRelationships $relationships;
}
