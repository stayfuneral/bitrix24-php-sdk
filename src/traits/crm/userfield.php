<?php


namespace Bitrix24\Traits\CRM;

use Bitrix24\Traits\Helpers\CrmTrait;

trait UserField
{
    use CrmTrait;
    /**
     * @var string $entity
     */
    public $entity;

    /**
     * @param string $entity
     */
    public function setEntity(string $entity): void
    {
        $this->entity = $entity;
    }

    public function getMethod($name)
    {
        return 'crm.'. $this->entity . '.userfield.' . $name;
    }


}