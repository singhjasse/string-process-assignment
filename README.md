## About Assignment

The primary objective of this assignment is to build a command that will process a string input and return 3 different output i.e

- Convert input string to uppercase, ex: Input - "**hello**" Output - "**HELLO**".
- Convert alternative input string character to uppercase, ex: Input - "**hello**" Output - "**hElLo**".
- Create a csv file at root folder that contains each string character as column, ex : Input - "**hello**" Output -- filename  - "**string.csv**" data in csv columns are "**h,e,l,l,o**".


## Coding & Implementation details

As our primary objective is to build business rule to process string and for this Strategy design pattern, single-responsibility principle is used.


## Implementation Explanation

In this assignment, i had created a cli command(**ProcessStringCommand**) and passing a string input as a param.

    php artisan process:string "hello world"

In this above example the cli command will print 3 output lines on cli console and also create a csv file named "string.csv" at root.
    
    Output : 
        - HELLO WORLD
        - hElLo wOrLd
        - CSV created!

For test case exection, please run following command : 

    php artisan test /* this command will execute all test cases */
    php artisan test --filter ProcessCommandTest /* this command will execute all test cases added in ProcessCommandTest test class  */



 - Console command is created in app/Console/Commands folder.
 - Interfaces are created in app/Interfaces folder.
 - Services are created in app/Services folder.
 - Two traits are created for string conversion from lower to upper &  upper to lower
 - Test cases are created at the root folder in tests/Features & tests/Unit.  
## Steps to install & execute

    1.) Clone repository
    2.) git pull
    3.) Run command "composer install"
    4.) Run command "php artisan process:string 'hello world'" -- this will print result on console & create a csv file named "string.csv" at root
    5.) Run command "php artisan test" -- this will execute all the test cases that are added on console"
