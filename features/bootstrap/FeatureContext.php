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




    public function iAmOnThePage($url)
    {
        $this->visitPath($url);
    }
    /**
     * @Then there should be an :element with the :attribute :value
     * @Then there should be a :element with the :attribute :value
     */
    public function thereShouldBeAnWithThe($element, $attribute, $value)
    {
        $this->assertSession()->elementExists('css', $element.'['.$attribute."~='".$value."']");
    }
    /**
     * @Then /^(?:there should be )?an? "(?P<element>[^"]*)" with(?: attributes)? "(?P<atts>[^"]*)" having values "(?P<vals>[^"]*)"$/
     */
    public function thereShouldBeAnElementWithAttributesHavingValues($element, $atts, $vals)
    {
        $selector = $element;
        $atts = explode(',', $atts);
        $vals = explode(',', $vals);
        for ($i = 0; $i < count($atts); ++$i) {
            $selector .= '['.$atts[$i].'="'.$vals[$i].'"]';
        }
        $this->assertSession()->elementExists('css', $selector);
    }

}
