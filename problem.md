Code Golf Challenge #0 - Plinko-ish

Context:

Consider a tree of integers in the following shape:

      0
     1 2
    3 4 5
   6 7 8 9
10 11 12 13 14

The root node has value 0 (R=0), there are 5 rows (N=5), and values increment by 1 (K=1). Note this is not a binary tree.

Here's another example, R=100, N=3, K=1:

    100
  101 102
103 104 105

And another, R=-2, N=2, K=-1:

  -2
-3 -4

Problem:

Write a PHP program that, given values for R, N, and K, returns the sum of the first elements in each row of the tree. R, N, and K will be passed as $argv[1] thru 3. N is guaranteed to be >= 1. Inputs are guaranteed to not overflow a signed 64-bit integer. Assume PHP 5.5.17 (the version on our VMs) and the chef'd versions of everything in /etc/php*. Your code must not emit any stderr (no warnings).

Examples:

$ php yourscript.php 0 5 1 # Should output "20\n" (0+1+3+6+10 == 20, include a newline)
$ php yourscript.php 100 3 1 # Should output "304\n"
$ php yourscript.php -2 2 -1 # Should output "-5\n"

Scoring:

Smallest correct source code (in bytes) wins.