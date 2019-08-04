<?PHP

echo "
<form mehtod='GET'>
<input type='date' name='date' required>
<input type='submit' value='OK'>
</form>";

$input = $_GET['date'];
$input_change = date("d.m.Y", strtotime($_GET['date']));

echo "
Input: ".$input."
<br>
Input-Change: ".$input_change."";

?>