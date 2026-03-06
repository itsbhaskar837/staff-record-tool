<?php
include 'includes/db.php';
include 'includes/header.php';

$sql="SELECT * FROM staff";
$result=$conn->query($sql);
?>

<h2>Staff List</h2>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Department</th>
</tr>

<?php
while($row=$result->fetch_assoc()){
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['department']."</td>";
echo "</tr>";
}
?>

</table>

</div>
</body>
</html>
