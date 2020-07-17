<?php


namespace Bitrix24\Traits\CRM;


trait Entity
{
    public $entity;

    public function setEntity($entity)
    {
        $this->entity = $entity;
    }

    public function getMethod($method)
    {
        return 'crm.' . $this->entity . '.' . $method;
    }

    public function getList()
    {

    }
}