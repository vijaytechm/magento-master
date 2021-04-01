<?php
namespace Techm\Vijay\Model;
class Feedback extends \Magento\Framework\Model\AbstractModel
{

    protected function _construct()
    {
        $this->_init('Techm\Vijay\Model\ResourceModel\Feedback');
    }

    public function getMydata(){

        return "Data saved successfully";
    }

}