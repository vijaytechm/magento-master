<?php
namespace Techm\Vijay\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Techm\Vijay\Model\ResourceModel\Feedback\CollectionFactory;
use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Exception\NotFoundException;
use Magento\Ui\Component\MassAction\Filter;

class Massdelete extends Action implements HttpPostActionInterface
{
    /**
     * Authorization level
     */
    const ADMIN_RESOURCE = 'Magento_Catalog::categories';

    /**
     * @var \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory
     */
    protected $collectionFactory;

    /**
     * @var \Magento\Catalog\Api\CategoryRepositoryInterface
     */
    private $categoryRepository;

    /**
     * @var \Magento\Ui\Component\MassAction\Filter
     */
    protected $filter;


/**
* @var \Techm\Vijay\Model\Feedback
*/
   protected $feedback;
    /**
     * Constructor
     *
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Ui\Component\MassAction\Filter $filter
     * @param \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $collectionFactory
     * @param \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(
        Context $context,
        Filter $filter,
        CollectionFactory $collectionFactory,
        CategoryRepositoryInterface $categoryRepository,
        \Techm\Vijay\Model\Feedback $feedback
    ) {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        $this->categoryRepository = $categoryRepository;
        $this->feedback=$feedback;
        parent::__construct($context);
    }

    /**
     * Category delete action
     *
     * @return Redirect
     */
    public function execute(): Redirect
    {
        if (!$this->getRequest()->isPost()) {
            throw new NotFoundException(__('Page not found')); 
        }
        $collection = $this->filter->getCollection($this->collectionFactory->create());

        //print_r($collection->getItems()); 
        //$collectionSize = $collection->getSize();
        $categoryDeleted = 0;
        foreach ($collection as $item) {
             $id=$item->getId(); 
            $deleteItem = $this->feedback->load($id);
            $deleteItem->delete();
             $categoryDeleted++;
        }

        if ($categoryDeleted) {
            $this->messageManager->addSuccessMessage(
                __('A total of %1 record(s) have been deleted.', $categoryDeleted)
            );
        }
        return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath('feedback/index/index');
    }
}


