<?php
namespace Techm\Vijay\Controller\Index;

class Data extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    protected $feedback;
    protected $messageManager;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Techm\Vijay\Model\Feedback $feedback,
        \Magento\Framework\Message\ManagerInterface $messageManager

    )
    {
        $this->_pageFactory = $pageFactory;
        $this->feedback=$feedback;
        $this->messageManager = $messageManager;
        return parent::__construct($context);

    }

    public function execute()
    {

        $resultPage = $this->feedback;

        $data=$resultPage->load(3);

        print_r($data->getData()); exit;

        //$collection = $resultPage->getCollection(); //Get Collection of module data
        //var_dump($collection->getData());
        //exit;

    }



}
