<?php
include("../db.php");
$sql = "SELECT MIN(salary) AS lowest_salary FROM employees";
$result = $conn->query($sql);
if(!$result) die("Query error: " . $conn->error);
$row = $result->fetch_assoc();
?>
<h2>MIN()</h2>
<pre><?= $sql ?></pre>
<p>Lowest salary: <b><?= htmlspecialchars($row["lowest_salary"]) ?></b></p>
<p><a href="../index.php">Back</a></p>
