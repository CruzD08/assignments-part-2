<!DOCTYPE html>
<html>
<head>
    <title>Random Numbers in PHP</title>
</head>
<body>

<nav class="navbar">
    <ul class="nav-menu">
        <li><a href="index.html">Home</a></li>

        <li class="dropdown">
            <a href="bis23.html">BIS 23 ▾</a>
            <ul class="dropdown-menu">
                <li><a href="equipbudget.html">Equipment Budget</a></li>
                <li><a href="WebtechSeries.html">Web Technologies Series</a></li>
                <li><a href="https://cruzd08.github.io/cruzdelossantos.github.io/index.html" target="_blank">Setting Up Your Web Server <br></a></li>
                <li><a href="wsproposal3.html">Requirement Documents</a></li>
                <li><a href="https://cruzd08.github.io/CSS-Nav-Menu/" target="_blank">CSS Navigation</a></li>
                <li><a href="debugging.html">Debugging and Pseudo Code</a></li>
                <li><a href="jspresentation.html">JS Presentation</a></li>
            </ul>
        </li>

        <li class="dropdown">
             <a href="bis31.html">BIS 31 ▾</a>
            <ul class="dropdown-menu">
                <li><a href="researchbusws.html">Research Business Web Sites</a></li>
                <li><a href="https://cruzd08.github.io/cruzdelossantos.github.io/index.html" target="_blank">Setting Up Your Web Server <br></a></li>
                <li><a href="wsproposal1.html">Requirement Documents</a></li>
                <li><a href="phpquiz.html">W3Schools PHP Quiz</a></li>
               <li><a href="https://cruzd08.github.io/CSS-Nav-Menu/" target="_blank">CSS Navigation</a></li>
                <li><a href="php_loops.html">PHP Loops</a></li>
            </ul>
        </li>

        <li><a href="bis23projects.html">BIS 23 Projects</a></li>
        <li><a href="bis31projects.html">BIS 31 Projects</a></li>

    </ul>
</nav>

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
echo "Random number (1–27): " . rand(1,27) . "<br>";
echo "Random number (1–178): " . rand(1,178) . "<br>";
echo "Random number (1–600): " . rand(1,600);
?>






<footer>
  <p><p>© Copyright 2026. All Rights Reserved.</p>
    <p><a href="mailto:cruzmeirycollado@gmail.com">cruzmeirycollado@gmail.com</a></p></p>
</footer>

</body>
</html>