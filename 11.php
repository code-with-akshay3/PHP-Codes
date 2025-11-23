<?php
$error = "";
$roll_no = $name = $class = $mobile_no = $email = $city = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Roll Number
    if (empty($_POST["roll_no"]) || !is_numeric($_POST["roll_no"])) {
        $error .= "Roll Number is required and must be a number.<br>";
    } else {
        $roll_no = htmlspecialchars($_POST["roll_no"]);
    }

    // Validate Name
    if (empty($_POST["name"]) || !preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
        $error .= "Name is required and should contain only letters.<br>";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    // Validate Class
    if (empty($_POST["class"])) {
        $error .= "Class is required.<br>";
    } else {
        $class = htmlspecialchars($_POST["class"]);
    }

    // Validate Mobile Number
    if (empty($_POST["mobile_no"]) || !preg_match("/^[0-9]{10}$/", $_POST["mobile_no"])) {
        $error .= "Mobile Number is required and must be 10 digits.<br>";
    } else {
        $mobile_no = htmlspecialchars($_POST["mobile_no"]);
    }

    // Validate Email
    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $error .= "Valid Email ID is required.<br>";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    // Validate City
    if (empty($_POST["city"])) {
        $error .= "City is required.<br>";
    } else {
        $city = htmlspecialchars($_POST["city"]);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>College Student Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            text-align: center;
        }
        form {
            display: inline-block;
            text-align: left;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        label {
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .error {
            color: red;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2> Student Information Form</h2>
    <form method="post">
        <label>Roll Number:</label>
        <input type="text" name="roll_no" value="<?php echo $roll_no; ?>" required><br>
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required><br>
        <label>Class:</label>
        <input type="text" name="class" value="<?php echo $class; ?>" required><br>
        <label>Mobile Number:</label>
        <input type="text" name="mobile_no" value="<?php echo $mobile_no; ?>" required><br>
        <label>Email ID:</label>
        <input type="email" name="email" value="<?php echo $email; ?>" required><br>
        <label>City:</label>
        <input type="text" name="city" value="<?php echo $city; ?>" required><br>
        <button type="submit">Submit</button>
    </form>
    <div class="error">
        <?php if (!empty($error)) echo "<br><strong>Errors:</strong><br>$error"; ?>
    </div>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)): ?>
        <h2>Student Details</h2>
        <table>
            <tr><th>Field</th><th>Value</th></tr>
            <tr><td>Roll Number</td><td><?php echo $roll_no; ?></td></tr>
            <tr><td>Name</td><td><?php echo $name; ?></td></tr>
            <tr><td>Class</td><td><?php echo $class; ?></td></tr>
            <tr><td>Mobile Number</td><td><?php echo $mobile_no; ?></td></tr>
            <tr><td>Email ID</td><td><?php echo $email; ?></td></tr>
            <tr><td>City</td><td><?php echo $city; ?></td></tr>
        </table>
    <?php endif; ?>
</body>
</html>
