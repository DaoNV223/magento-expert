<?php
declare(strict_types=1);

namespace DaoNguyen\Cache\Block;

use Magento\Framework\View\Element\Template;

class Index extends Template
{
    /**
     * Get random number.
     *
     * @return int
     */
    public function getRandomNumber(): int
    {
        return rand(1, 100);
    }
}
