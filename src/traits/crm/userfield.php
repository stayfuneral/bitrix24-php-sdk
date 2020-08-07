<?php


namespace Bitrix24\Traits\CRM;


trait UserField
{
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
}