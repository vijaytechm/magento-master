<?php
namespace Mageplaza\HelloWorld\Block;
class HelloWorld extends \Magento\Framework\View\Element\Template
{    
    protected $_catalogSession;
    protected $_customerSession;
    protected $_checkoutSession;
        
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,        
        \Magento\Catalog\Model\Session $catalogSession,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Checkout\Model\Session $checkoutSession,
        array $data = []
    )
    {        
        $this->_catalogSession = $catalogSession;
        $this->_checkoutSession = $checkoutSession;
        $this->_customerSession = $customerSession;
        parent::__construct($context, $data);
    }
    
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
        
    public function getCatalogSession() 
    {
        return $this->_catalogSession;
    }
    
    public function getCustomerSession() 
    {
        return $this->_customerSession;
    }
    
    public function getCheckoutSession() 
    {
        return $this->_checkoutSession;
    }    
}
?>