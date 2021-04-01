<?php
namespace Techm\Vijay\Controller\Adminhtml\Index;

class Index extends \Magento\Backend\App\Action
{
/**
* Index action
*
* @return void
*/
public function execute()
{
$this->_view->loadLayout();
$this->_view->renderLayout();

}
}
