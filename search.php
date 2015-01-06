

<?php
mysql_connect ("localhost", "root","root")  or die (mysql_error());
mysql_select_db ("eshopper");
 
$term = $_POST['term'];
 
$sql = mysql_query("select * from product where pname like '%$term%'");
 
echo "<table>
<tr>
<th>Company Name</th>
<th>Plateform</th>
<th>Role</th>
<th>Discrition</th>
<th>Expirence</th>
<th>Contact</th>
<th>City</th>
</tr>";

while ($row = mysql_fetch_array($sql)){

echo 
 "<tr><td>".$row['cName']. "</td><td>".$row['Plate']."</td><td>".$row['Role']."</td><td>".$row['Disc']."</td><td>".$row['Exp']."</td><td>".$row['Cont']."</td><td>".$row['city'];
}
echo "</table>";

?>
   
