<?php


namespace Bitrix24\CRM\Company;


use Bitrix24\Bitrix24Entity;
use Bitrix24\Contracts\iBitrix24;
use Bitrix24\Traits\CRM\UserField as ufCrmTrait;

class UserField extends Bitrix24Entity
{
    use ufCrmTrait;

    public function __construct(iBitrix24 $client)
    {
        $this->setEntity('company');
        parent::__construct($client);
    }
}