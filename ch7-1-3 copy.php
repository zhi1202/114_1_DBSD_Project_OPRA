<H1>SID: C112181107
<BR>
NAME: Zhi</H1>
<P>

<?php

$scores = array(22, 16, 30, 24);
$total = 0;

foreach ($scores as $score) {
   echo "$score | ";
   $total+=$score;
}

echo "<BR> Total: ". $total . "<BR>";
print_r($scores); 
