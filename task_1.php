<?php 
// task 1
print_r("Hello, World!");

// task 2
print_r('King in the North!');

// task 3
// You know nothing, Jon Snow!

// task 4
print_r("Robert");
print_r("Stannis");
print_r("Renly");

// task 5
print_r(9780262531962);

// task 6
print_r("What Is Dead May Never Die");

// task 7
// BEGIN (write your solution here)
print_r(81 / 9);
// END

// task 8
// BEGIN (write your solution here)
print_r(6 - -81);
// END

// task 9
// BEGIN (write your solution here)
print_r(3 ** 5);
print_r(-8 / -4);
// END

// task 10
// BEGIN (write your solution here)
print_r(8 / 2 + 5 - -3 / 2);
// END

// task 11
// BEGIN (write your solution here)
print_r(70 * (3 + 4) / (8 + 2));
// END

// task 12
// BEGIN (write your solution here)
print_r((5 ** 2) - (7 * 3));
// END

// task 13
// BEGIN (write your solution here)
print_r("\"Khal Drogo's favorite word is \"athjahakar\"\"");
// END

// task 14
// BEGIN (write your solution here)
print_r("- Did Joffrey agree?\n- He did. He also said \"I love using \\n\".");
// END

// task 15
// BEGIN (write your solution here)
print_r("Winter" . " came" . " for" . " the" . " House" . " of" . " Frey.");
// END

// task 16
// BEGIN (write your solution here)
print_r(chr(126));
print_r(chr(94));
print_r(chr(37));
// END

// task 17
// BEGIN (write your solution here)
print_r(-0.304);
// END

// task 18
// BEGIN (write your solution here)
print_r('7' - (-8 - -2));
// END

// task 19
// BEGIN (write your solution here)
print_r((int)(string)2.9 . ' times');
// END

// task 20
// BEGIN (write your solution here)
$motto = "What Is Dead May Never Die!";
print_r($motto);
// END

// task 21
$name = 'Brienna';

// BEGIN (write your solution here)
$name = 'anneirB';
// END

print_r($name);

// task 22
// BEGIN (write your solution here)
$myBrothersCount = 2;
print_r($myBrothersCount);
// END

// task 23
$family = 'Targaryen';

// BEGIN (write your solution here)
$pet = 'Dragon';
// END

print_r($family);
print_r(' and ');
print_r($pet);

// task 24
$eurosCount = 100;

// BEGIN (write your solution here)
$dollarsCount = $eurosCount * 1.25;
print_r($dollarsCount);
$rublesCount = $dollarsCount * 60;
print_r("\n" . $rublesCount);
// END

// task 25
$info = "We couldn't verify you mother's maiden name.";
$intro = "\nHere is important information about your account security.";

$firstName = 'Joffrey';
$greeting = 'Hello';

// BEGIN (write your solution here)
print_r($greeting . ", " . $firstName . "!");
print_r($intro . "\n" . $info);
// END

// task 26
// BEGIN (write your solution here)
$firstNumber = 1.10;
$secondNumber = -100;
print_r($firstNumber * $secondNumber);
// END

// task 27
$king = 'King Balon the 6th';

// BEGIN (write your solution here)
$numberOfRoomsInCastle = 17;
$numberOfKing = 6;
print_r($king . ' has ' . ($numberOfKing * $numberOfRoomsInCastle) . ' rooms.');
// END

// task 28
// BEGIN (write your solution here)
const DRAGONS_BORN_COUNT = 3;
// END

// task 29
// BEGIN (write your solution here)
print_r(__DIR__);
// END

// task 30
$stark = 'Arya';

// BEGIN (write your solution here)
print_r("Do you want to eat, {$stark}?");
// END

// task 31
$one = 'Naharis';
$two = 'Mormont';
$three = 'Sand';

// BEGIN (write your solution here)
print_r($one[2] . $two[1] . $three[3] . $two[4] . $two[2]);
// END

// task 32
// BEGIN (write your solution here)
$str = <<<EOT
Lannister, Targaryen, Baratheon, Stark, Tyrell... they're all just spokes on a wheel.
This one's on top, then that one's on top, and on and on it spins, crushing those on the ground.
EOT;
// END

print_r($str);

// task 33
$company1 = 'Apple';
$company2 = 'Samsung';

// BEGIN (write your solution here)
print_r(strlen($company1) + strlen($company2));
// END

// task 34
$text = 'mount';

// BEGIN (write your solution here)
print_r(ucfirst($text));
// END

// task 35
$number = 10.1234;

// BEGIN (write your solution here)
print_r(round($number, 2));
// END

// task 36
$text = 'Never forget what you are, for surely the world will not';

// BEGIN (write your solution here)
$result = "First: {$text[0]}\nLast: {$text[strlen($text) - 1]}";
print_r($result);
// END

// task 37
// BEGIN (write your solution here)
print_r(min(3, 10, 22, -3, 0));
// END

// task 38
// BEGIN (write your solution here)
print_r(rand(1, 6));
// END

// task 39
$motto = 'Family, Duty, Honor';

// BEGIN (write your solution here)
print_r(gettype($motto));
// END

// task 40
// BEGIN (write your solution here)
function printMotto()
{
    print_r("Winter is coming");
}
// END

// task 41
// BEGIN (write your solution here)
function sayHurrayThreeTimes()
{
    return "hurray! hurray! hurray!";
}
// END

// task 42
// BEGIN (write your solution here)
function truncate($str, $length)
{
    return substr($str, 0, $length) . "...";
}
// END

// task 43
// BEGIN (write your solution here)
function getHiddenCard($creditCardNumber, $starCount = 4)
{
    $stars = str_repeat('*', $starCount);
    $hiddenNumber = $stars . substr($creditCardNumber, 12);
    return $hiddenNumber;
}
// END

// task 44
