<?php
namespace Limonte\Tests;

use Limonte\McAfeeSiteAdvisor as SiteAdvisor;

class McAfeeSiteAdvisorTest extends \PHPUnit_Framework_TestCase
{
    private $checker;

    public function __construct()
    {
        $this->checker = new SiteAdvisor;
    }

    public function testOk()
    {
        $this->assertEquals(
            SiteAdvisor::OK,
            $this->checker->check('https://google.com')
        );
    }

    public function testMightBeDangerous()
    {
        $this->assertEquals(
            SiteAdvisor::SUSPICIOUS,
            $this->checker->check('http://9nl.pw/e25y')
        );

        $this->assertEquals(
            SiteAdvisor::SUSPICIOUS,
            $this->checker->check('http://ggovusa.us.pn')
        );
    }

    public function testMightStealYourIdentity()
    {
        $this->assertEquals(
            SiteAdvisor::SUSPICIOUS,
            $this->checker->check('http://fisioterapiaironica.com.br')
        );
    }

    /**
     * @expectedException Exception
     */
    public function testInvalidUrl()
    {
        $this->checker->check('invalid URL');
    }
}
