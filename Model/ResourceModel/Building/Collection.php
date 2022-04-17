<?php
namespace AHT\knockout\Model\ResourceModel\Building;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'building_id';
    protected $_eventPrefix = 'aht_knockout_building_collection';
    protected $_eventObject = 'building_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('AHT\knockout\Model\Building', 'AHT\knockout\Model\ResourceModel\Building');
    }
}
