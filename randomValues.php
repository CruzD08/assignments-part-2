<!DOCTYPE html>
<html>
<head>
    <title>Random Numbers in PHP</title>
</head>
<body>


<h2>Part 1: Coin Toss Simulation</h2>

<!-- Part 1.
Simulate a coin tossing PHP program. 
You will toss the coin 100 times and your program should display the number of times heads and tails occur. -->


<?php
$heads = 0;
$tails = 0;


for ($i = 0; $i < 100; $i++) {
    $coin = rand(0,1);

    if ($coin == 0) {
        $heads++;
    } else {
        $tails++;
    }
}

echo "Heads: " . $heads . "<br>";
echo "Tails: " . $tails;
?>

<hr>

<h2>Part 2: Random Numbers</h2>

<!-- Part 2.

Write a series PHP scripts to generate a random number for each of the following range of values.

1 to 27
1 to 178
1 to 600 -->


<?php
echo "Random number (1-27): " . rand(1,27) . "<br>";
echo "Random number (1-178): " . rand(1,178) . "<br>";
echo "Random number (1-600): " . rand(1,600);
?>


</body>
</html>
