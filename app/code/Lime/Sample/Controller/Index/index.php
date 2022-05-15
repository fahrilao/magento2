<?php
declare(strict_types=1);

namespace Lime\Sample\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\Result\JsonFactory;
/**
 * Class Index
 */
class Index implements HttpGetActionInterface
{
    /**
     * @var JsonFactory
     */
    private $jsonFactory;

    /**
     * @param JsonFactory $jsonFactory
     */
    public function __construct(JsonFactory $jsonFactory)
    {
        $this->jsonFactory = $jsonFactory;
    }

    /**
     * @inheritdoc
     */
    public function execute()
    {
        /** @var Json $json */
        $json = $this->jsonFactory->create();
        
        return $json->setData(['hello' => 'world']);
    }
}