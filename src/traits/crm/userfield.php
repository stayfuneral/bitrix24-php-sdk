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

    /**
     * Get method name
     *
     * @param $name
     *
     * @return string
     */
    public function getMethod($name)
    {
        return 'crm.'. $this->entity . '.userfield.' . $name;
    }

    /**
     * Get list of user fields items.
     *
     * @param array $order - order of task items
     * @param array $filter - filter array
     *
     * @return array
     */
    public function getList($order = [], $filter = [])
    {
        return $this->client->call(
            $this->getMethod('list'),
            [
                'order' => $order,
                'filter' => $filter
            ]
        );
    }

    /**
     * Get item userfield
     *
     * @param integer $id entity userfield id
     *
     * @return array
     */
    public function get($id)
    {
        return $this->client->call(
            $this->getMethod('get'),
            [
                'id' => $id
            ]
        );
    }

    /**
     * Delete userfield
     *
     * @param integer $id entity userfield id
     *
     * @return array
     */
    public function delete($id)
    {
        return $this->client->call(
            $this->getMethod('delete'),
            [
                'id' => $id
            ]
        );
    }

    /**
     * Add a new crm entity userfield
     * @param array $fields array of fields
     *
     * @return array
     */
    public function add($fields)
    {
        return $this->client->call(
            $this->getMethod('add'),
            [
                'fields' => $fields
            ]
        );
    }

    /**
     * @param integer $id entity userfield id
     * @param array $fields
     *
     * @return array
     */
    public function update($id, $fields = [])
    {
        return $this->client->call(
            $this->getMethod('update'),
            [
                'id' => $id,
                'fields' => $fields
            ]
        );
    }

}