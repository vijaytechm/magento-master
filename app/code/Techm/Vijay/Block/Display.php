<?php
namespace Techm\Vijay\Block;
class Display extends \Magento\Framework\View\Element\Template
{
    protected $feedback;
	public function __construct(\Magento\Framework\View\Element\Template\Context $context,
                                \Techm\Vijay\Model\Feedback $feedback)
	{
        $this->feedback=$feedback;
		parent::__construct($context);
	}

	public function getHeader()
	{
		return __('This is my header block');
	}
	
	public function getFooter()
	{
		return __('This is my footer block');
	}

	public function getCollection(){

        $resultPage = $this->feedback;

       return $resultPage->getCollection();
}
}