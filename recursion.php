<?php

/**
 * Recursion in PHP
 *
 * Examples
 * Input: "5"
 * Output: The factorial of 5 is 120
 *
 * Input: 10
 * Output: The factorial of 10 is 3628800
 *
 * Input: "Groot"
 * Fatal error: Uncaught InvalidArgumentException: I am Groot!!
 */
class Factorial
{
    protected int $total;

    public function __construct(protected $num)
    {
        if (!is_numeric($num)) {
            throw new InvalidArgumentException('I am Groot!!');
        }
        $this->result($this->num);
    }

    public function __toString(): string
    {
        return "The factorial of $this->num is $this->total";
    }

    public function result(int $num): int
    {
        if ($num == 1) {
            return 1;
        } else {
            $this->total = $num * $this->result($num - 1);
        }
        return $this->total;
    }
}

$mixed_type = ["5", 10, "groot"];
$input = array_rand($mixed_type, 1);

print new Factorial($mixed_type[$input]);
