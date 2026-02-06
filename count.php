<?php
include("../db.php");
$sql = "SELECT COUNT(*) AS total_employees FROM employees";
$result = $conn->query($sql);
if(!$result) die("Query error: " . $conn->error);
$row = $result->fetch_assoc();
?>
<h2>COUNT()</h2>
<pre><?= $sql ?></pre>
<p>Total employees: <b><?= htmlspecialchars($row["total_employees"]) ?></b></p>
<p><a href="../index.php">Back</a></p>
