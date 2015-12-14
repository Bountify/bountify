Feature: GiftNeed Search
    In order to view the results of a search
    Based on an input search value
    I need the ability to display the results of a query

    Scenario: Display Search Results
        Given I am on the "giftNeeds" page
        Then I should see text matching {{$title}}