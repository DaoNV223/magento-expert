<?php
declare(strict_types=1);

namespace DaoNguyen\PrivateContent\Controller\Privatecontent;

use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultInterface;

class Index implements HttpPostActionInterface
{
    /**
     * @var JsonFactory
     */
    private JsonFactory $jsonFactory;

    /**
     * @param JsonFactory $jsonFactory
     */
    public function __construct(JsonFactory $jsonFactory)
    {
        $this->jsonFactory = $jsonFactory;
    }

    /**
     * Execute controller.
     *
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        return $this->jsonFactory->create()->setData([
            'result' => 'OK'
        ]);
    }
}
