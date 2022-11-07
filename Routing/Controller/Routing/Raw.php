<?php
declare(strict_types=1);

namespace DaoNguyen\Routing\Controller\Routing;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\RawFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NotFoundException;

class Raw implements HttpGetActionInterface
{
    /**
     * @var RawFactory
     */
    private RawFactory $rawFactory;

    /**
     * @param RawFactory $rawFactory
     */
    public function __construct(RawFactory $rawFactory)
    {
        $this->rawFactory = $rawFactory;
    }

    /**
     * Execute raw controller.
     *
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        // throw new NotFoundException(__('123'));
        /** @var \Magento\Framework\Controller\Result\Raw $raw */
        $raw = $this->rawFactory->create();
        $raw->setContents('Hello World');
        return $raw;
    }
}
