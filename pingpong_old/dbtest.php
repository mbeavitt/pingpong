<html>

<?php   


$db_handle = pg_connect("dbname=pingpong user=postgres password=69x4tefF");   
$query = "SELECT name FROM player";   
$result = pg_exec($db_handle, $query);   

echo "<table border=1>";

for ($row = 0; $row < pg_numrows($result); $row++) {        
        $name = pg_result($result, $row, 0);        
        echo "<tr><td>$name</td></tr>\n";        
    }         

echo "</table>";

pg_freeresult($result);   
pg_close($db_handle);   
?>

</html>