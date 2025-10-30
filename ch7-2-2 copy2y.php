<H1>SID: C112181107
<BR>
NAME: Zhi</H1>
<P>

<?php
$weekday = array(
   1 => "Mon",
   "Tue",
   "Wed",
   "Thu",
   "Fri",
   "Sat",
   "Sun"
);
for ($i = 1; $i <= count($weekday); $i++) {
   echo " $i : $weekday[$i] ";
}
