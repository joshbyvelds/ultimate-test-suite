Ultimate Test Suite

Note: on Windows you need surround your program paths in quotes Eg: .\"vendor/bin/behat"

to run behat: ./behat

Make make sure Selenium is running
C:\Java Jars>java -jar selenium-server-standalone-3.141.59.jar


to setup PHPSpec

open composer.json and change "UltimateTest" to your project name.

open phpspec.yml and change namespace to match the previous change

to use phpspec

run ./phpspec desc namespace/classname to create the spec file

run ./phpspec run and type Y to create the phpclass

setup your tests in the spec file 

run ./phpspec run to setup functions in real class

fill in your real functions

run ./phpspec again to check

rinse and repeat :)



