<?php
namespace Techm\Vijay\Controller\Index;

class Delete extends \Magento\Framework\App\Action\Action
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
        $this->feedback = $feedback;
        $this->messageManager = $messageManager;
        parent::__construct($context);

    }

    public function execute()
    {
       $id = $this->getRequest()->getParam('id');

        $col= $this->feedback->load($id);
        $col->delete();
        $this->messageManager->addSuccess(__('Deleted successfully.'));
        return $this->_redirect('vijay/index/display');
    }
}