# Uncommon PHP Bug: Division by Zero in Array Average Calculation

This repository demonstrates a subtle bug in a PHP function designed to calculate the average of an array of numbers.  The bug occurs when the input array is empty. 

The `bug.php` file contains the original function with the bug. The `bugSolution.php` file provides a corrected implementation that handles the empty array scenario gracefully.

## Bug Description

The `calculateAverage` function in `bug.php` does not explicitly handle the case where the input array is empty. Although it returns 0.0, this may not be considered a robust approach. A more robust approach would be to throw an exception or return an error value indicating that it's not possible to calculate the average of an empty array. This bug may lead to unexpected behaviors and potential errors in applications relying on this function.

## Solution

The corrected version in `bugSolution.php` adds a check for an empty array at the beginning of the function and handles it with a proper return value or exception handling. This prevents division by zero errors and ensures more reliable behavior. 

## How to Run

1. Clone this repository.
2. Run the PHP files using a PHP interpreter. For example: `php bug.php` and `php bugSolution.php`

The output should demonstrate the behavior of the original buggy code and its corrected version.