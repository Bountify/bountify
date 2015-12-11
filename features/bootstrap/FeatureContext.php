<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }
    

    /**
     * @Then I should see an :input with :name :bountifysearch
     */
    public function iShouldSeeAnWith($element, $attribute, $value)
    {
        $this->assertSession()->elementExists('css', "{$element}[{$attribute}='$value']");
    }

    /**
     * @Then I should see a :arg1 with :arg2 :arg3
     */
    public function iShouldSeeAWith($arg1, $arg2, $arg3)
    {
        $this->assertSession()->elementExists('css', "{$arg1}[{$arg2}='$arg3']");
    }
}
