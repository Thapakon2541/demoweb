<!DOCTYPE html>
<html>
<body>

<?php
echo "My second page PHP script!";

$x = 5985;
var_dump(is_numeric($x));

$x = "15985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>

</body>
</html>
</html>
/**Commit 21._1 Line 11 */