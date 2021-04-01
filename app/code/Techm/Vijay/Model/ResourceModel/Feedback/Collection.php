<?php

namespace Techm\Vijay\Model\ResourceModel\Feedback;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Techm\Vijay\Model\Feedback',
            'Techm\Vijay\Model\ResourceModel\Feedback'
        );
    }

}