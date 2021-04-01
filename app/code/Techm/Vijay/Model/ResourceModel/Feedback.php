<?php
namespace Techm\Vijay\Model\ResourceModel;
class Feedback extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    protected function _construct()
    {
        $this->_init('feedback_form','id');

    }

}