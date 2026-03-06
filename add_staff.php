<?php
include 'includes/db.php';
include 'includes/header.php';

if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$department = $_POST['department'];

$sql = "INSERT INTO staff(name,email,department)
VALUES('$name','$email','$department')";

if($conn->query($sql)){
echo "<p>Staff added successfully</p>";
}
}
?>

<h2>Add Staff</h2>

<form method="POST">

<label>Name</label>
<input type="text" name="name" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Department</label>
<input type="text" name="department">

<button type="submit" name="submit">Add</button>

</form>

</div>
</body>
</html>
