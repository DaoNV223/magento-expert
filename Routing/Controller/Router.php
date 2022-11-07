<?php
declare(strict_types=1);

namespace DaoNguyen\Routing\Controller;

use DaoNguyen\Routing\Controller\Routing\Json;
use DaoNguyen\Routing\Controller\Routing\Raw;
use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\RouterInterface;

class Router implements RouterInterface
{
    /**
     * @var ActionFactory
     */
    private ActionFactory $actionFactory;

    /**
     * @param ActionFactory $actionFactory
     */
    public function __construct(ActionFactory $actionFactory)
    {
        $this->actionFactory = $actionFactory;
    }

    /**
     * Logic match routes of custom router.
     *
     * @param RequestInterface $request
     * @return ActionInterface|null
     */
    public function match(RequestInterface $request): ?ActionInterface
    {
        $identifier = trim($request->getPathInfo(), '/');
        if (str_contains($identifier, 'custom-router')) {
            return $this->actionFactory->create(Raw::class);
        }

        return null;
    }
}
