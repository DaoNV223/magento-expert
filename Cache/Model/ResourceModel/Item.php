<?php
declare(strict_types=1);

namespace DaoNguyen\Cache\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init('todo_items', 'id');
    }
}
