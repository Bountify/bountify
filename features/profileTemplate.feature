Feature: User Profile Page
    In order to keep one's personal information current
    As a member of Bountify
    I need the ability to view my profile
    With the included ability to access a page to edit my profile

    Scenario: Elements on the Profile Page
        Given I am on the "profile" page
        Then I should see "Gifts and Needs"
        And I should see text matching {{ $username }}
        And I should see text matching {{ $first_name }}
        And I should see text matching {{ $last_name }}
        And I should see text matching {{ $email }}
        And I should see text matching {{ $phone_number }}