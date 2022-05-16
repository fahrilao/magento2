<?php

namespace Lime\Sample\Test\Unit\Block;

use Lime\Sample\Block\Index;
use Magento\Framework\View\Element\Template\Context;
use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase {
  /**
   * @var Index $object
   */
  private $object;

  protected function setUp(): void {
      $contextMock = $this->getMockBuilder(Context::class)
          ->disableOriginalConstructor()
          ->getMock();

      $this->object = new Index($contextMock);
  }

  public function testIndexInstance() {
	  $this->assertInstanceOf(Index::class, $this->object);
  }
}