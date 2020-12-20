<?php
//learn_more_test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class LearnMoreForm extends WebTestCase {

	  function testCorrectInfo() {
		$this->get(VIRTUAL_PATH . '/index.php');
		$this->assertResponse(200);

    $this->clickSubmit("about.php");
    $this->assertText("Pay calculator for agency billable hours");
	}
	

	

} 
