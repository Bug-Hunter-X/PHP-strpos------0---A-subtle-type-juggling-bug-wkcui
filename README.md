# PHP strpos() == 0: A Subtle Type Juggling Bug

This repository demonstrates a common, yet easily overlooked, bug in PHP code involving the `strpos()` function and loose comparison.  The issue stems from the fact that `strpos()` returns `false` when the needle is not found, and `false` is loosely equal to `0` in PHP.

## The Bug
The core problem is using `==` (loose comparison) instead of `===` (strict comparison) when checking the result of `strpos()`.  This can lead to incorrect results, specifically, mistaking the absence of the needle for the needle being found at the beginning of the string.  

The `bug.php` file shows this in action.  Note that when the needle is not found, the code incorrectly reports it as being found at the beginning of the string.

## The Solution
The solution is simple: always use strict comparison (`===`) when checking the results of `strpos()`. This prevents the false positive caused by type juggling. The `bugSolution.php` demonstrates the corrected code.

## How to Use
1. Clone this repository.
2. Run `bug.php` to see the buggy behavior.
3. Run `bugSolution.php` to see the corrected behavior.