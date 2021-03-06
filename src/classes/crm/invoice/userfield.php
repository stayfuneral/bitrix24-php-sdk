<?php

namespace Bitrix24\CRM\Invoice;

use Bitrix24\Bitrix24Entity;
use Bitrix24\Contracts\iBitrix24;
use Bitrix24\Traits\CRM\UfCrmTrait;

/**
 * Class UserField
 */
class UserField extends Bitrix24Entity
{
    use UfCrmTrait;

    public function __construct(iBitrix24 $client)
    {
        $this->setEntity('invoice');
        parent::__construct($client);
    }
}