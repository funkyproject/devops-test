<?php
/**
 * Created by PhpStorm.
 * User: aurelien
 * Date: 30/10/15
 * Time: 14:35
 */

namespace FDJ\Tests\Common;


use FDJ\Common\People;

class PeopleTest extends \PHPUnit_Framework_TestCase
{

    public function testPeopleShouldSayHelloWorld()
    {

        $people = new People();
        $this->assertEquals("Hello world !", $people->say("Hello world !"));
    }

}
