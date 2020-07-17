<?php


namespace Bitrix24\CRM\Company;

use Bitrix24\Contracts\iBitrix24;
use Bitrix24\Traits\CRM;
use Bitrix24\Bitrix24Entity;

class UserField extends Bitrix24Entity
{
    use CRM\UserField;
    public function __construct(iBitrix24 $client)
    {
        parent::__construct($client);
        $this->setEntity('company');
    }
}