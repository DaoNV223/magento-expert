<?php
declare(strict_types=1);

namespace DaoNguyen\Cache\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel implements IdentityInterface
{
    public const CACHE_TAG = 'todo_item';

    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\Item::class);
    }

    /**
     * Get id of the item.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        if ($this->hasData('id')) {
            return (int) $this->getData('id');
        }
        return null;
    }

    /**
     * Get content of the item.
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->getData('content');
    }

    /**
     * Set content to the item.
     *
     * @param string $content
     * @return void
     */
    public function setContent(string $content): void
    {
        $this->setData('content', $content);
    }

    /**
     * Get identities of the item.
     *
     * @return int[]
     */
    public function getIdentities(): array
    {
        $identities = [self::CACHE_TAG . '_' . $this->getId()];
        $identities[] = 'todo_list';
        return $identities;
    }
}
