<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext {
	/**
	 * Initializes context.
	 *
	 * Every scenario gets its own context instance.
	 * You can also pass arbitrary arguments to the
	 * context constructor through behat.yml.
	 */
	public function __construct() {
	}


    /**
     * @Then I should see an :element with :attribute :value
     * @Then I should see a :element with :attribute :value
     */
    public function iShouldSeeAnWith($element, $attribute, $value)
    {
        $this->assertSession()->elementExists('css', "{$element}[{$attribute}='$value']");
    }
}
