<?php

$host     = 'localhost';
$dbname   = 'student_db';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("CREATE TABLE IF NOT EXISTS students (
    id            INT AUTO_INCREMENT PRIMARY KEY,
    first_name    VARCHAR(100),
    last_name     VARCHAR(100),
    dob           VARCHAR(20),
    email         VARCHAR(150),
    mobile        VARCHAR(20),
    gender        VARCHAR(10),
    address       TEXT,
    city          VARCHAR(100),
    pin_code      VARCHAR(20),
    state         VARCHAR(100),
    country       VARCHAR(100),
    hobbies       VARCHAR(255),
    board1        VARCHAR(20), pct1 VARCHAR(10), year1 VARCHAR(10),
    board2        VARCHAR(20), pct2 VARCHAR(10), year2 VARCHAR(10),
    board3        VARCHAR(20), pct3 VARCHAR(10), year3 VARCHAR(10),
    board4        VARCHAR(20), pct4 VARCHAR(10), year4 VARCHAR(10),
    course        VARCHAR(20),
    created_at    DATETIME DEFAULT CURRENT_TIMESTAMP
)");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first    = $conn->real_escape_string($_POST['first_name'] ?? '');
    $last     = $conn->real_escape_string($_POST['last_name'] ?? '');
    $dob      = ($conn->real_escape_string($_POST['dob_day'] ?? '')) . '/' .
                ($conn->real_escape_string($_POST['dob_month'] ?? '')) . '/' .
                ($conn->real_escape_string($_POST['dob_year'] ?? ''));
    $email    = $conn->real_escape_string($_POST['email'] ?? '');
    $mobile   = $conn->real_escape_string($_POST['mobile'] ?? '');
    $gender   = $conn->real_escape_string($_POST['gender'] ?? '');
    $address  = $conn->real_escape_string($_POST['address'] ?? '');
    $city     = $conn->real_escape_string($_POST['city'] ?? '');
    $pin      = $conn->real_escape_string($_POST['pin_code'] ?? '');
    $state    = $conn->real_escape_string($_POST['state'] ?? '');
    $country  = $conn->real_escape_string($_POST['country'] ?? '');
    $hobbies  = $conn->real_escape_string(implode(', ', $_POST['hobbies'] ?? []));
    $course   = $conn->real_escape_string($_POST['course'] ?? '');

    $board = $_POST['board'] ?? [];
    $pct   = $_POST['percentage'] ?? [];
    $year  = $_POST['year'] ?? [];

    $sql = "INSERT INTO students 
        (first_name, last_name, dob, email, mobile, gender, address, city, pin_code, state, country, hobbies,
         board1, pct1, year1, board2, pct2, year2, board3, pct3, year3, board4, pct4, year4, course)
        VALUES 
        ('$first','$last','$dob','$email','$mobile','$gender','$address','$city','$pin','$state','$country','$hobbies',
         '{$board[1]}','{$pct[1]}','{$year[1]}',
         '{$board[2]}','{$pct[2]}','{$year[2]}',
         '{$board[3]}','{$pct[3]}','{$year[3]}',
         '{$board[4]}','{$pct[4]}','{$year[4]}',
         '$course')";

    if ($conn->query($sql)) {
        $success = "Registration successful! Welcome, $first $last.";
    } else {
        $error = "Error: " . $conn->error;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Result</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 40px; text-align: center; }
    .success { color: green; font-size: 20px; }
    .error   { color: red;   font-size: 18px; }
    a { margin-top: 20px; display: inline-block; color: blue; }
  </style>
</head>
<body>
  <?php if (isset($success)): ?>
    <p class="success"><?= htmlspecialchars($success) ?></p>
  <?php elseif (isset($error)): ?>
    <p class="error"><?= htmlspecialchars($error) ?></p>
  <?php else: ?>
    <p>No data submitted.</p>
  <?php endif; ?>
  <a href="index.php">&larr; Back to Registration Form</a>
</body>
</html>
