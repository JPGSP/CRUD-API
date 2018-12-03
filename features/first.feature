Feature: GET programmes
  Scenario: Get all the available programmes
    When I send a GET request to "/api/programme"
    Then the response is JSON