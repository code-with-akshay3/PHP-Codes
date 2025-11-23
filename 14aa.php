 

<!DOCTYPE html>
<html>
<head>
<title>Student Information Form</title>
</head>
<body>
<h2>Student Information Form</h2>
<form method="post">
<label>Roll Number:</label>
<input type="text" name="roll_no" required><br><br>
<label>Name:</label>
<input type="text" name="name" required><br><br>
<label>Class:</label>
<input type="text" name="class" required><br><br>
<label>Contact Number:</label>
<input type="text" name="contact_no" required><br><br>
<label>Email ID:</label>
<input type="email" name="email_id" required><br><br>
<button type="submit" name="submit">Submit</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
$roll_no = htmlspecialchars($_POST['roll_no']);
$name = htmlspecialchars($_POST['name']);
$class = htmlspecialchars($_POST['class']);
$contact_no = htmlspecialchars($_POST['contact_no']);
$email_id = htmlspecialchars($_POST['email_id']);

echo "<h3>Student Information:</h3>";
echo "<p><strong>Roll Number:</strong> $roll_no</p>";
echo "<p><strong>Name:</strong> $name</p>";
echo "<p><strong>Class:</strong> $class</p>";
echo "<p><strong>Contact Number:</strong> $contact_no</p>";
echo "<p><strong>Email ID:</strong> $email_id</p>";
}
?>
</body>
</html>
