Feature: Login Form
    In order to use the members-only features of the site
    As a registered user or user wannabe
    I need a place to login

    Scenario: What I should see on the login form
        Given I am on "login"
        Then I should see an "input" with "name" "email"
        And I should see an "input" with "type" "email"
        And I should see an "input" with "name" "password"
        And I should see an "input" with "type" "password"
        And I should see a "label" with "for" "email"
        And I should see "Email" in the "label[for='email']" element
        And I should see a "label" with "for" "password"
        And I should see "Password" in the "label[for='password']" element
        And I should see a "button[type='submit']" element
        And I should see "Login" in the "button[type='submit']" element
        And I should see "Reset Password" in the "a[href='/reset']" element
        And I should see "Register" in the "a[href='/register']" element
