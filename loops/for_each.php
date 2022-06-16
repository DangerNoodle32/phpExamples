<!DOCTYPE html>
<html>
<body>

<h1>Foreach loop</h1>

<p>The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.</p>

<?php  
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
  echo "$value <br>";
}
?>  

</body>
</html>
