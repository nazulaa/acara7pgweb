<!DOCTYPE html>
<html>
<body>

<h3>Welcome to Rifzu's Bakery yey</h3>

<?php

$menu = array("Pancakes", "Cookies", "Cupakes", "Muffins", "Cake", "Tart");
$flavors = array("Chocolate", "Strawberry", "Blueberry", "Matcha", "Tiramissu", "Orange");

echo "<table border='1'>";
for($i=0; $i <= 5; $i++){
echo "<tr><td> $menu[$i] </td><td> $flavors[$i] </td></tr>";
}
echo "</table>";
?>

</body>
</html>