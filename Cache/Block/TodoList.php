<?php
declare(strict_types=1);

namespace DaoNguyen\Cache\Block;

use DaoNguyen\Cache\Model\ResourceModel\Item\Collection;
use DaoNguyen\Cache\Model\ResourceModel\Item\CollectionFactory;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\View\Element\Template;

class TodoList extends Template implements IdentityInterface
{
    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;

    /**
     * @param CollectionFactory $collectionFactory
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * Get to do list.
     *
     * @return array
     */
    public function getTodoList(): array
    {
        /** @var Collection $collection */
        $collection = $this->collectionFactory->create();
        return $collection->getItems();
    }

    /**
     * Get identities of the block.
     *
     * @return string[]
     */
    public function getIdentities(): array
    {
        return ['todo_list'];
    }
}
