<?php

namespace Tests;

use Modelizer\Selenium\SeleniumTestCase;
use Facebook\WebDriver\WebDriverBy;

class SeleniumTest extends SeleniumTestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        // This is a sample code you can change as per your current scenario
        $this->visit('/')
             ->see('index.php')
             ->hold(3);
    }

   /* public function visit($path)
    {
        $this->url($path);
        return $this;
    } */
}















/*namespace Tests;

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Modelizer\Selenium\SeleniumTestCase;

class SeleniumTest extends SeleniumTestCase
{

    public function testBasicExample()
    {
        // This is a sample code you can change as per your current scenario
        $this->visit('/')
             ->see('Home');
    }
    public function testAfficherMoy()
    {
        $this -> url('/create.php');
        $Niveau = $this->ByName ('niveau');
        $Group = $this->ByName ('grp');
        $this->assertEquals ('', $Niveau->value());
        $this->assertEquals ('', $Group->value());

    }
*/
    /*
    public function setUp()
    {
        $this->setHost('localhost');
        $this->setPort(4444);
        $this->setBrowser('chrome');
        //$this->setBrowserUrl('http://localhost:8000/');
        $this->setBrowserUrl('http://localhost/TP_IGL/public/');
    }

    public function testAfficherMoy()
    {
        $this -> url('create.php');
        $Niveau = $this->ByName ('niveau');
        $Group = $this->ByName ('grp');
        $this->assertEquals ('', $Niveau->value());
        $this->assertEquals ('', $Group->value());

    }

    public function testFormSubmission()
    {
        $this->byName('niveau')->value('1CS');
        $this->byId('subscriptionForm')->submit();

       // $content = $this->byTag('body')->text();
       // $this->assertEquals('Everything is Good!', $content);
    }
    
    public function testExample()
    {
        //$this->visit('/');
        $I->amOnPage('/');
        $I->see('Home');
       // ->see('Site title','title');
        
    }

    public function tearDown()
    {
        $this->stop();
    }
        */

    /*
    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
                    ->type('a', 3)
                    ->type('b', 1)
                    ->press('Execute')
                    ->assertPathIs('/calc')
                    ->assertSee('4');
        });
    }
    */
    

    

