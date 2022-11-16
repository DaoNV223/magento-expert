<?php
declare(strict_types=1);

namespace DaoNguyen\PrivateContent\CustomerData;

use Magento\Customer\CustomerData\SectionSourceInterface;

class RandomNumber implements SectionSourceInterface
{
    /**
     * @inheritdoc
     */
    public function getSectionData(): array
    {
        return [
            'value' => rand(0, 1000)
        ];
    }
}
