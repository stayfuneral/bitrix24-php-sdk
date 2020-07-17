<?php

namespace Bitrix24\Traits\CRM;

use Bitrix24\Bitrix24Entity;

trait UserField
{
    public $entity;

    public function setEntity($entity)
    {
        $this->entity = $entity;
    }

    public function getMethod($method)
    {
        return 'crm.' . $this->entity . 'userfield' . $method;
    }

    public function getList($order = [], $filter = [])
    {


        $fullResult = $this->client->call(
            $this->getMethod('list'), [
                'order' => $order,
                'filter' => $filter
            ]
        );

        return $fullResult;
    }

    public function get($userFieldId)
    {
        $fullResult = $this->client->call(
            $this->getMethod('get'), [
                'id' => $userFieldId
            ]
        );

        return $fullResult;
    }

    public function add($fields = [])
    {
        $fullResult = $this->client->call(
            $this->getMethod('add'), [
                'fields' => $fields
            ]
        );

        return $fullResult;
    }
}
