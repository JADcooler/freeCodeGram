<?php

//<table border = "1">
echo "<form action='/test2' method='post'>";
foreach ($tharray as $user)
{
$v=$user->regno;
$u=$user->name;
echo "<input type=checkbox id=$v name=selections[] value=$v>";
echo "<label for=$v> $v $u</label><br>";
}
echo "<input type='submit' value='Submit'>";
echo "</form>";
?>