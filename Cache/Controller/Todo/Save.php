<?php
declare(strict_types=1);

namespace DaoNguyen\Cache\Controller\Todo;

use DaoNguyen\Cache\Model\Item;
use DaoNguyen\Cache\Model\ItemFactory;
use Exception;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Message\ManagerInterface;

class Save implements HttpPostActionInterface
{
    /**
     * @var RedirectFactory
     */
    private RedirectFactory $redirectFactory;

    /**
     * @var RequestInterface
     */
    private RequestInterface $request;

    /**
     * @var ItemFactory
     */
    private ItemFactory $itemFactory;

    /**
     * @var ManagerInterface
     */
    private ManagerInterface $messageManager;

    /**
     * @var \DaoNguyen\Cache\Model\ResourceModel\Item
     */
    private \DaoNguyen\Cache\Model\ResourceModel\Item $resource;

    /**
     * @param RedirectFactory $redirectFactory
     * @param RequestInterface $request
     * @param ItemFactory $itemFactory
     * @param \DaoNguyen\Cache\Model\ResourceModel\Item $resource
     * @param ManagerInterface $messageManager
     */
    public function __construct(
        RedirectFactory $redirectFactory,
        RequestInterface $request,
        ItemFactory $itemFactory,
        \DaoNguyen\Cache\Model\ResourceModel\Item $resource,
        ManagerInterface $messageManager
    ) {
        $this->redirectFactory = $redirectFactory;
        $this->request = $request;
        $this->itemFactory = $itemFactory;
        $this->resource = $resource;
        $this->messageManager = $messageManager;
    }

    /**
     * Save to do item.
     *
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        $resultRedirect = $this->redirectFactory->create();
        /** @var Item $item */
        $item = $this->itemFactory->create();
        $item->setContent($this->request->getParam('content'));
        try {
            $this->resource->save($item);
        } catch (Exception $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        }
        $resultRedirect->setPath('*/*/index');
        return $resultRedirect;
    }
}
