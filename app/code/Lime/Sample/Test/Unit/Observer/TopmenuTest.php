<?php

namespace Lime\Sample\Test\Unit\Observer;

use Magento\Framework\Event\Observer;
use Lime\Sample\Observer\Topmenu;
use PHPUnit\Framework\TestCase;
use Magento\Framework\Event\ObserverInterface;

/**
 * Class IndexTest
 */
class TopmenuTest extends TestCase {
  /**
   * @var Index $object
   */
  private $object;

  protected function setUp(): void {
      $this->object = new Topmenu();
  }

  public function testIndexInstance() {
	  $this->assertInstanceOf(ObserverInterface::class, $this->object);
  }
}