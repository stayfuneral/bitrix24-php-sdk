<?php


namespace Bitrix24\CRM\Qoute;


use Bitrix24\Bitrix24Entity;
use Bitrix24\Contracts\iBitrix24;
use Bitrix24\Traits\CRM\UfCrmTrait;

class UserField extends Bitrix24Entity
{
    use UfCrmTrait;

    public function __construct(iBitrix24 $client)
    {
        $this->setEntity('quote');
        parent::__construct($client);
    }
}