Ultimate Test Suite

to run behat: .\"vendor/bin/behat"

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



