<?php
declare(strict_types=1);

namespace DaoNguyen\Routing\Controller\Routing;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\ResultInterface;

class Forward implements ActionInterface
{
    /**
     * @var ForwardFactory
     */
    private ForwardFactory $forwardFactory;

    /**
     * @param ForwardFactory $forwardFactory
     */
    public function __construct(ForwardFactory $forwardFactory)
    {
        $this->forwardFactory = $forwardFactory;
    }

    /**
     * Forward action.
     *
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        $forward = $this->forwardFactory->create();
        $forward->forward('index');
        return $forward;
    }
}
