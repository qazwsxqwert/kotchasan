<?php

namespace Kotchasan;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-06-27 at 14:14:04.
 */
class LanguageTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @var Language
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {

  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {

  }

  /**
   * Generated from @assert (array(array('id' => 0, 'key' => 'One'), array('id' => 100, 'key' => 'Two')), 'One') [==] 0.
   *
   * @covers Kotchasan\Language::keyExists
   */
  public function testKeyExists()
  {

    $this->assertEquals(
      0, \Kotchasan\Language::keyExists(array(array('id' => 0, 'key' => 'One'), array('id' => 100, 'key' => 'Two')), 'One')
    );
  }

  /**
   * Generated from @assert (array(array('id' => 0, 'key' => 'One'), array('id' => 100, 'key' => 'Two')), 'two') [==] 100.
   *
   * @covers Kotchasan\Language::keyExists
   */
  public function testKeyExists2()
  {

    $this->assertEquals(
      100, \Kotchasan\Language::keyExists(array(array('id' => 0, 'key' => 'One'), array('id' => 100, 'key' => 'Two')), 'two')
    );
  }

  /**
   * Generated from @assert (array(array('id' => 0, 'key' => 'One'), array('id' => 100, 'key' => 'Two')), 'O') [==] -1.
   *
   * @covers Kotchasan\Language::keyExists
   */
  public function testKeyExists3()
  {

    $this->assertEquals(
      -1, \Kotchasan\Language::keyExists(array(array('id' => 0, 'key' => 'One'), array('id' => 100, 'key' => 'Two')), 'O')
    );
  }

  /**
   * Generated from @assert () [==] 'th'.
   *
   * @covers Kotchasan\Language::name
   */
  public function testName()
  {

    $this->assertEquals(
      'th', \Kotchasan\Language::name()
    );
  }

  /**
   * Generated from @assert ('YEAR_OFFSET') [==] 543.
   *
   * @covers Kotchasan\Language::get
   */
  public function testGet()
  {

    $this->assertEquals(
      543, \Kotchasan\Language::get('YEAR_OFFSET')
    );
  }

  /**
   * Generated from @assert (array(1 => 'not found')) [==] 'not found'.
   *
   * @covers Kotchasan\Language::parse
   */
  public function testParse()
  {

    $this->assertEquals(
      'not found', \Kotchasan\Language::parse(array(1 => 'not found'))
    );
  }

  /**
   * Generated from @assert ('You want to :action', array(':action' => 'delete')) [==] 'You want to delete'.
   *
   * @covers Kotchasan\Language::replace
   */
  public function testReplace()
  {

    $this->assertEquals(
      'You want to delete', \Kotchasan\Language::replace('You want to :action', array(':action' => 'delete'))
    );
  }

  /**
   * Generated from @assert ('YEAR_OFFSET') [==] 543.
   *
   * @covers Kotchasan\Language::find
   */
  public function testFind()
  {

    $this->assertEquals(
      543, \Kotchasan\Language::find('YEAR_OFFSET')
    );
  }

  /**
   * Generated from @assert ('not found', 'default') [==] 'default'.
   *
   * @covers Kotchasan\Language::find
   */
  public function testFind2()
  {

    $this->assertEquals(
      'default', \Kotchasan\Language::find('not found', 'default')
    );
  }

  /**
   * Generated from @assert ('ภาษา {LNG_DATE_FORMAT} ไทย') [==] 'ภาษา d M Y เวลา H:i น. ไทย'.
   *
   * @covers Kotchasan\Language::trans
   */
  public function testTrans()
  {

    $this->assertEquals(
      'ภาษา d M Y เวลา H:i น. ไทย', \Kotchasan\Language::trans('ภาษา {LNG_DATE_FORMAT} ไทย')
    );
  }
}
