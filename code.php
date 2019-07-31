<?php
/**
 * acceptInput
 * 
 * @author : Shubham Goel (shubhamgoeloctane@gmail.com)
 * @Created : 1 August 2019
 * @Description : Accepts the input numbers.
 * Only positive distinct numbers that are greater than 1 are allowed.
 * 
 */
function acceptInput()
{
    $stdin = fopen("php://stdin", "r");
    print "\n".'Enter first number as multiple: ';
    list($input1) = fscanf($stdin, "%d\n");

    print "\n".'Enter second number as multiple: ';
    list($input2) = fscanf($stdin, "%d\n");

    if ($input1 >= 1 && $input2 >= 1 && $input1 != $input2) {
        printNumbers($input1, $input2);
        return;
    }
    print('Please enter two distinct positive integers that are >= 1.');
    acceptInput();
}

/**
 * printNumbers
 * 
 * @author : Shubham Goel (shubhamgoeloctane@gmail.com)
 * @Created : 1 August 2019
 * @Description : print all numbers from 1 to 100. 
 * However, for muliptles of 'input1' print 'Linio', for 'input2' print 'IT' and those that are multiples of 'input1' and 'input2' print 'Linianos'
 * @param integer $input1 first inputted number
 * @param integer $input2 second inputted number
 * 
 */
function printNumbers($input1, $input2) 
{
    /* array carrying the possible print values */
    $printValues = [11=>'Linianos', '01'=>'IT', 10=>'Linio'];

    for ($i = 1; $i <= 100; $i++) {
        /* Initializing the current value on '00' index. Will only be printed when the number is divisible by none */
        $printValues['00'] = $i;

        /* Possible values for $result can be (00/01/10/11) */
        $result = ((int) ($i % $input1 == 0)).((int) ($i % $input2 == 0));
        echo $printValues[$result]."\n";
    }
}

acceptInput();
