<?php
declare(strict_types=1);

namespace DaoNguyen\Routing\Controller\Routing;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\LayoutFactory;

class Layout implements HttpGetActionInterface
{
    /**
     * @var LayoutFactory
     */
    private LayoutFactory $layoutFactory;

    /**
     * @param LayoutFactory $layoutFactory
     */
    public function __construct(LayoutFactory $layoutFactory)
    {
        $this->layoutFactory = $layoutFactory;
    }

    /**
     * Execute layout controller.
     *
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        return $this->layoutFactory->create();
    }
}
