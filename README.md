# SOLID LSP Principle sample with PHP
###### _In this repository you can see a sample of a little PHP project with LSP SOLID principle, and the inverse, without that._

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

### Sample Context
###### We have a base class, the Auth class, which simulates an authentication class. It has two methods, one to authenticate and the other to verify that the user is an adult before authenticating. The other class, AuthApi, extends the base class to simulate API authentication with API Credentials. The API credentials are ageless, so it's wrong, which forces you to implement a method that shouldn't exist there, in addition to throwing an unexpected exception, specific to that case. Everything here violates the LSP principle, which we are applying in the other branch.

###### In another example, applying the LSP, we segregated the methods with interfaces, which made our code more secure, readable and scalable.

### To create it, we use:

- :elephant: PHP 7.4 :elephant:
- :whale: Docker :whale:
- :chart: TDD :chart:

## Get Started

- We have two branches. One with the principle applied, and another without that.
- Make a git clone of the project at your chosen branch.

- Up the containers with Docker, run:
   ```sh
        docker-compose up -d --build
   ```
- The branch that have the applied principle, have automated tests. Do this to run:
    ```sh
        docker exec -it "container_name" bash
    ```
- Make sure your actual folder is "html". if not, run:
    ```sh
        cd html
    ```
- To finally execute tets, run:
    ```sh
        ./vendor/bin/phpunit Tests/AuthTest.php
    ```

#### Development

##### Want to contribute? Great!

This project can grow even more with your contribution! 
Suggestions are always welcome!


## License

MIT

**Free Software, Hell Yeah!**
