 

<!DOCTYPE html>
<html>
<head>
<title>Student Semester Marks List</title>
</head>
<body>
<h2>Student Semester Marks Form</h2>
<form method="post">
<label>PRN:</label>
<input type="text" name="prn" required><br><br>
<label>Name:</label>
<input type="text" name="name" required><br><br>
<label>Roll Number:</label>
<input type="text" name="rollno" required><br><br>
<label>Class:</label>
<input type="text" name="class" required><br><br>
<label>Subject 1 Marks:</label>
<input type="number" name="subject1" required><br><br>
<label>Subject 2 Marks:</label>
<input type="number" name="subject2" required><br><br>
<label>Subject 3 Marks:</label>
<input type="number" name="subject3" required><br><br>
<label>Subject 4 Marks:</label>
<input type="number" name="subject4" required><br><br>

<label>Subject 5 Marks:</label>
<input type="number" name="subject5" required><br><br>
<button type="submit" name="submit">Generate Mark List</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
$prn = htmlspecialchars($_POST['prn']);
$name = htmlspecialchars($_POST['name']);
$rollno = htmlspecialchars($_POST['rollno']);
$class = htmlspecialchars($_POST['class']);
$subject1 = (int)$_POST['subject1'];
$subject2 = (int)$_POST['subject2'];
$subject3 = (int)$_POST['subject3'];
$subject4 = (int)$_POST['subject4'];
$subject5 = (int)$_POST['subject5'];
$total = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
$percentage = $total / 5;
echo "<h3>Student Semester Mark List</h3>";
echo "<p><strong>PRN:</strong> $prn</p>";
echo "<p><strong>Name:</strong> $name</p>";
echo "<p><strong>Roll Number:</strong> $rollno</p>";
echo "<p><strong>Class:</strong> $class</p>";
echo "<h4>Marks Obtained:</h4>";
echo "<p>Subject 1: $subject1</p>";
echo "<p>Subject 2: $subject2</p>";
echo "<p>Subject 3: $subject3</p>";
echo "<p>Subject 4: $subject4</p>";
echo "<p>Subject 5: $subject5</p>";
echo "<h4>Total Marks: $total</h4>";
echo "<h4>Percentage: $percentage%</h4>";
}
?>
</body>
</html>
