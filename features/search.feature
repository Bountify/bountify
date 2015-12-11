Feature: Search Form
	In order to find a gift or need
	As a user
	I need a search form

	Scenario: Home Page
		Given I am on the homepage
		Then I should see "Laravel 5"

	Scenario: What I should see on the search form
        Given I am on "gifts/search"
        Then I should see an "input" with "name" "bountifysearch"
        And I should see an "input" with "type" "text"
        And I should see an "input" with "name" "need"
        And I should see an "input" with "type" "checkbox"
        And I should see an "input" with "name" "gift"
        And I should see an "input" with "type" "checkbox"
        And I should see a "label" with "for" "bountifysearch"
        And I should see "Search text:" in the "label[for='bountifysearch']" element
        And I should see a "label" with "for" "need"
        And I should see "Need" in the "label[for='need']" element
        And I should see an "input" with "type" "submit"
        And I should see an "input" with "value" "Submit"

