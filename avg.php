<?php
include("../db.php");
$sql = "SELECT AVG(salary) AS avg_salary FROM employees";
$result = $conn->query($sql);
if(!$result) die("Query error: " . $conn->error);
$row = $result->fetch_assoc();
?>
<h2>AVG()</h2>
<pre><?= $sql ?></pre>
<p>Average salary: <b><?= htmlspecialchars(round($row["avg_salary"], 2)) ?></b></p>
<p><a href="../index.php">Back</a></p>
