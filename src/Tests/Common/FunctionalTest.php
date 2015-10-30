<?php
/**
 * Created by PhpStorm.
 * User: aurelien
 * Date: 30/10/15
 * Time: 14:35
 */

namespace FDJ\Tests\Common;


use FDJ\Common\People;
use Symfony\Component\Process\Process;

/**
 * Class PeopleTest
 * @package FDJ\Tests\Common
 * @group functional
 */
class FunctionalTest extends \PHPUnit_Framework_TestCase
{

    public function testPeopleShouldSayHelloWorld()
    {

        $process = new Process("php build/hello-world.phar", realpath(__DIR__."/../../../"));
        $process->enableOutput();
        $process->run();

        if($process->isSuccessful()) {
            $this->assertEquals("Hello world !", $process->getOutput());
        } else {
            $this->fail($process->getErrorOutput());
        }

    }

}
