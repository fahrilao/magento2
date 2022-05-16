<?php

namespace Lime\Sample\Test\Unit\Controller;

use Lime\Sample\Controller\Index\Index;
use PHPUnit\Framework\TestCase;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\Result\Page;

/**
 * Class IndexTest
 */
class IndexTest extends TestCase {
  /**
   * @var Index $object
   */
  private $object;

  protected function setUp(): void {
      $pageFactoryMock = $this->getMockBuilder(PageFactory::class)
          ->disableOriginalConstructor()
          ->getMock();
      
      $pageResult = $this->getMockBuilder(Page::class)
          ->disableOriginalConstructor()
          ->getMock();
      
      $pageFactoryMock->method('create')->will($this->returnValue($pageResult));

      $this->object = new Index($pageFactoryMock);
  }

  public function testIndexInstance() {
	  $this->assertInstanceOf(Index::class, $this->object);
  }

  public function testExcecuteFunctionInstance() {
    $this->assertInstanceOf(Page::class, $this->object->execute());
  }
}