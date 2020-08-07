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

    public function getMethod($name)
    {
        return 'crm.'. $this->entity . '.userfield.' . $name;
    }

    public function getList($order = [], $filter = [])
    {
        $fullResult = $this->client->call(
            $this->getMethod('list'),
            [
                'order' => $order,
                'filter' => $filter
            ]
        );

        return $fullResult;
    }

    public function get($userfieldId)
    {
        $fullResult = $this->client->call(
            $this->getMethod('get'),
            [
                'id' => $userfieldId
            ]
        );

        return $fullResult;
    }


}