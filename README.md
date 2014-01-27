questionBruteForce
==================

while surfing the network I've meet a cool question picture - this is a script which tryes to solve the question
(off-course it is faster to solve it in mind).

the picture represent 20 questions strongly related to each other.
To give an answer you need to explore all questions and find ones which are lesser related than others
so you can start from them.

the program
===========

it is a mathematical relation model which represents connection and conditions
which tie these questions to each other.

each question is represented as a condition related to over conditions.

program lets you set all 20 conditions in form of 20-digit number in 5-based scale notation
using letters A to E as values of each division (also they represent selected answer for particular question).

progam tryes to brute-force this 20-digit 5-based scale notation number.

(but it is tooo much for PHP - there is a 4.9323811479746E-17 of possible combinations.
