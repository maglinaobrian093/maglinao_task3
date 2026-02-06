<?php
include("../db.php");
$sql = "SELECT full_name, department, CONCAT(full_name,' - ',department) AS info FROM employees";
$result = $conn->query($sql);
if(!$result) die("Query error: " . $conn->error);
?>
<h2>CONCAT()</h2>
<pre><?= $sql ?></pre>
<table border="1" cellpadding="8">
<tr><th>full_name</th><th>department</th><th>info</th></tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
  <td><?= htmlspecialchars($row["full_name"]) ?></td>
  <td><?= htmlspecialchars($row["department"]) ?></td>
  <td><?= htmlspecialchars($row["info"]) ?></td>
</tr>
<?php endwhile; ?>
</table>
<p><a href="../index.php">Back</a></p>
