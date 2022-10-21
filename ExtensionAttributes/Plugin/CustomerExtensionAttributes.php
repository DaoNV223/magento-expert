<?php

namespace DaoNguyen\ExtensionAttributes\Plugin;

use Magento\Customer\Api\CustomerRepositoryInterface;
use Magento\Customer\Api\Data\CustomerInterface;

class CustomerExtensionAttributes
{
    /**
     * Set full name for the customer.
     *
     * @param CustomerRepositoryInterface $subject
     * @param CustomerInterface $result
     * @param int $customerId
     * @return CustomerInterface
     */
    public function afterGetById(
        CustomerRepositoryInterface $subject,
        CustomerInterface $result,
        $customerId
    ): CustomerInterface {
        $extensionAttributes = $result->getExtensionAttributes();
        if ($extensionAttributes !== null) {
            $fullName = $result->getFirstname() . ' ' . $result->getLastname();
            $extensionAttributes->setFullName($fullName);
        }
        return $result;
    }
}
