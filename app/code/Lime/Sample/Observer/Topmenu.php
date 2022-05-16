<?php
namespace Lime\Sample\Observer;
use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Data\Tree\Node;
use Magento\Framework\Event\ObserverInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\UrlInterface;

class Topmenu implements ObserverInterface
{
    /**
     * @param EventObserver $observer
     * @return $this
     */
    public function execute(EventObserver $observer)
    {
        $objectManager = ObjectManager::getInstance();
        $storeManager = $objectManager->get(StoreManagerInterface::class);
        $baseUrl = $storeManager->getStore()->getBaseUrl(UrlInterface::URL_TYPE_WEB);

        /** @var Node $menu */
        $menu = $observer->getMenu();
        $tree = $menu->getTree();
        $data = [
            'name'      => __('Home'),
            'id'        => 'home-page',
            'url'       => $baseUrl,
            'is_active' => false
        ];
        $node = new Node($data, 'id', $tree, $menu);
        $menu->addChild($node);
        return $this;
    }
}