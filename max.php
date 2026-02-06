<?php
include("../db.php");
$sql = "SELECT MAX(salary) AS highest_salary FROM employees";
$result = $conn->query($sql);
if(!$result) die("Query error: " . $conn->error);
$row = $result->fetch_assoc();
?>
<h2>MAX()</h2>
<pre><?= $sql ?></pre>
<p>Highest salary: <b><?= htmlspecialchars($row["highest_salary"]) ?></b></p>
<p><a href="../index.php">Back</a></p>
