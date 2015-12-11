Feature: GiftsAndNeeds
	In order to view the user gifts and needs
	As a user
	I want to see a list of gifts and needs 

	Scenario: I want to see user gifts and needs
		Given I am on "GiftsAndNeeds"
		Then I should see an "ol"  with "name" "Gifts"
		And I should see an "ol" with "name" "Needs"
