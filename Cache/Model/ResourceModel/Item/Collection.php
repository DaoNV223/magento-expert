<?php
declare(strict_types=1);

namespace DaoNguyen\Cache\Model\ResourceModel\Item;

use DaoNguyen\Cache\Model\Item;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init(Item::class, \DaoNguyen\Cache\Model\ResourceModel\Item::class);
    }

}
