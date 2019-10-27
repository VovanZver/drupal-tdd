<?php

namespace Drupal\Tests\tdd_custom\Unit;

use Drupal\tdd_custom\CustomHelper;
use Drupal\Tests\UnitTestCase;

class CustomHelperTest extends UnitTestCase
{

    /**
     * @var CustomHelper
     */
    protected $customHelper;

    /**
     * Before a test method is run, setUp() is invoked.
     * Create new CustomHelper object.
     */
    public function setUp()
    {
        $this->customHelper = new CustomHelper();
    }

    /**
     * @covers Drupal\tdd_custom\CustomHelper::setLength
     */
    public function testSetLength()
    {
        $this->assertEquals(0, $this->customHelper->getLength());
        $this->customHelper->setLength(9);
        $this->assertEquals(9, $this->customHelper->getLength());
    }

    /**
     * @covers Drupal\tdd_custom\CustomHelper::getLength
     */
    public function testGetLength()
    {
        $this->customHelper->setLength(9);
        $this->assertNotEquals(10, $this->customHelper->getLength());
    }

    /**
     * @covers Drupal\tdd_custom\CustomHelper::getContent
     */
    public function testGetContent()
    {
        $this->assertArrayHasKey('body', $this->customHelper->getContent());
    }

    /**
     * Once test method has finished running, whether it succeeded or failed,
     * tearDown() will be invoked. Unset the $unit object.
     */
    public function tearDown()
    {
        unset($this->unit);
    }

}