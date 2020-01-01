<?php

class SeleniumTestCase extends PHPUnit_Extensions_Selenium2TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */

    public function setUp()
    {
        $this->setHost('localhost');
        $this->setPort(4444);
        $this->setBrowser('chrome');
        //$this->setBrowserUrl('http://localhost:8000/');
        $this->setBrowserUrl('http://localhost/TP_IGL/public/');
    }

    public function tearDown()
    {
        $this->stop();
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
    
    /*
    public function testFormSubmissionWithUsername()
    {
        $this->byName('username')->value('younesrafie');
        $this->byId('subscriptionForm')->submit();

        $content = $this->byTag('body')->text();
        $this->assertEquals('Everything is Good!', $content);
    }

    public function visit($path)
    {
        $this->url($path);
        return $this;
    }

    protected function see($text, $tag = 'body')
    {
        print_r(request()->session()->all());
        //method call by tag name;
        $this->assertContains($text,$this->byTag($tag)->text());
        return $this;
    }

    public function pressByName($text){
        $this->byName($text)->click();
        return $this;
    }
    public function pressByTag(){
        $this->byTag('button')->click();
        return $this;
    }
    public function type($value, $name)
    {
        $this->byName($name)->value($value);
        return $this;
    }

    public function hold($seconds){
        sleep($seconds);
        return $this;
    }
    */
}