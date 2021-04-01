<?php
namespace Techm\Vijay\Controller\Index;

class Save extends \Magento\Framework\App\Action\Action
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
        $datas = $this->getRequest()->getParams();
        //print_r($datas); exit;

        $col = $this->feedback;
        $col->setName($datas['name']);
        $col->setEmail($datas['email']);
        $col->setTelephone($datas['telephone']);
        $col->setMessage($datas['message']);
        $col->save();
        $this->messageManager->addSuccess(__('Messge added successfully.'));
        return $this->_redirect('vijay/index/display');
    }
}
