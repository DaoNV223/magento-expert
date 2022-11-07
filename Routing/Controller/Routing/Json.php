<?php
declare(strict_types=1);

namespace DaoNguyen\Routing\Controller\Routing;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultInterface;

class Json implements HttpGetActionInterface
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
     * Execute the json routing.
     *
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        $json = $this->jsonFactory->create();
        $json->setData([
            'name' => 'Dao Nguyen'
        ]);
        return $json;
    }
}
