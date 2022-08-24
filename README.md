This is a fork of official Craft CMS demo site, [Spoke & Chain](https://github.com/craftcms/spoke-and-chain), created as the practical demonstration for [Frontend testing for Craft CMS]() article on [Fortrabbit blog](https://blog.fortrabbit.com/). It includes code for testing frontend of website using two frameworks - Cypress and Codeception.

## Installation

To install the site, run `composer install` and create `.env` file based on `.env.example` when you will include database connection data. Remember to also set `DEFAULT_SITE_URL` to base website URL. Spoke & Chain repository includes code for DDEV and Docker server setup, but the site can also run in regular PHP server.

## Running Cypress tests

To install Cypress tests, run `npm install`. One of the packages included in the project, `webapp-webpack-plugin`, is compatible only with Node 12 - if you want to install Cypress using newer version of Node, you need to remove this package from `package.json` before installation. Doing so, won't stop you form using Cypress tests in any way. This problematic package is related to frontend assets compilation, but repository already includes compiled JS and CSS files, so to check testing functionmality, we dont need to compile any assets.

Before you run Cypress, you need to create a `cypress.json` file which will provide configuration and environmental variables for our tests. Spoke & Chain contains `cypress.example.json` which you can rename to `cypress.json`. There you can set base website URL (depending on your server setup) and control panel login and password.

To run Cypress GUI, execute `npx cypress open` command.

## Running Codeception acceptance tests

Codeception packages are already included `composer.json` file. Before you run tests, copy main `.env` file to `tests` directory. If you wish, you can enter there connection data for separate database which will be used only for tests.

To run Codeception tests, execute `./vendor/bin/codecept run acceptance` command. You can also execute single tests, like this: `./vendor/bin/codecept run acceptance testClass` - whee `testClass` is class name of single test.