# Changelog

All notable changes to `queueables` will be documented in this file

## 0.1.0 - 2020-08-14
- initial release


## 0.2.0 - 2020-09-14
- add support for Laravel 8


## 0.3.0 - 2020-10-06
- add support for Laravel 4 & php 5.3-7.1


## 0.3.1 - 2020-10-06
- bump laravel min version requirement to 4.1


## 0.3.2 - 2020-10-07
- cut failing travis ci test using php 5.3


## 0.3.3 - 2020-12-04
- cut support for php5.3
- optimize Travis CI test suite


## 0.3.4 - 2020-12-11
- cut support for php5.5 & lower


## 1.0.0 - 2021-01-25
- add test suite with mock queueables
- add usage instructions to README
- cut support for php5.6
- bump min laravel/framework & phpunit versions
- add QueueableTest for testing AbstractQueueable


## 2.0.0 - 2021-04-05
- refactor `AbstractJob` & `AbstractQueueable` to `Job` & `Queueable`
- cut support for php7.0


## 2.1.0 - 2021-04-20
- cut support for php7.2 & below
- add sfneal/mock-models to dev requirements
- make `TestCase` that enables queue faking using the `QueueFaker` trait
- optimize Travis CI config & enable code coverage uploading
