<?php

require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://change-this-to-the-site-you-are-testing/");
  }

  function testMyTestCase()
  {
    $this->open("/complete_profile_popup.php?allyId=121");
    $this->type("c1", "Kuba");
    $this->type("c2", "Developer");
    $this->type("c3", "Vinnica");
    $this->type("c5", "dell");
    $this->type("c4", "xyz");
    $this->click("c6");
    $this->assertEquals("Your Profile was completed sucessfully", $this->getAlert());
  }
}
?>