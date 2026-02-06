<?php
$rows = [
  ["UPPER()", "Converts text to uppercase",
   "SELECT full_name, UPPER(full_name) AS upper_name FROM employees;",
   "examples/upper.php"],

  ["CONCAT()", "Joins strings together",
   "SELECT CONCAT(full_name,' - ',department) AS info FROM employees;",
   "examples/concat.php"],

  ["LENGTH()", "Returns the length of a string",
   "SELECT full_name, LENGTH(full_name) AS name_len FROM employees;",
   "examples/length.php"],

  ["SUBSTRING()", "Extracts part of a string",
   "SELECT email, SUBSTRING(email,1,4) AS first4 FROM employees;",
   "examples/substring.php"],

  ["COUNT()", "Counts rows",
   "SELECT COUNT(*) AS total_employees FROM employees;",
   "examples/count.php"],

  ["SUM()", "Adds values together",
   "SELECT SUM(amount) AS total_sales FROM orders;",
   "examples/sum.php"],

  ["AVG()", "Average value",
   "SELECT AVG(salary) AS avg_salary FROM employees;",
   "examples/avg.php"],

  ["MIN()", "Smallest value",
   "SELECT MIN(salary) AS lowest_salary FROM employees;",
   "examples/min.php"],

  ["MAX()", "Largest value",
   "SELECT MAX(salary) AS highest_salary FROM employees;",
   "examples/max.php"],


];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>SQL Functions Demo</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: 10px; vertical-align: top; }
    th { background: #f4f4f4; }
    code { display: block; white-space: pre-wrap; }
  </style>
</head>
<body>
  <h2>SQL Functions Demonstration</h2>
  <table>
    <tr>
      <th>SQL Function</th>
      <th>Description</th>
      <th>Example Code</th>
      <th>Example Output</th>
    </tr>

    <?php foreach ($rows as $r): ?>
      <tr>
        <td><b><?= htmlspecialchars($r[0]) ?></b></td>
        <td><?= htmlspecialchars($r[1]) ?></td>
        <td><code><?= htmlspecialchars($r[2]) ?></code></td>
        <td><a href="<?= htmlspecialchars($r[3]) ?>" target="_blank">View</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
