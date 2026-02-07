<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("functions_list.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>SQL Functions Demo</title>

  <style>
    * { box-sizing: border-box; }

    :root{
      --nav-height: 70px; 
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      scroll-behavior: smooth;
    }

    nav {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 9999;
      background: #222;
      padding: 15px 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
      display: flex;
      gap: 30px;
      align-items: center;
      flex-wrap: wrap;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      padding: 6px 4px;
      border-bottom: 3px solid transparent;
    }

    nav a:hover {
      border-bottom-color: rgba(255,255,255,0.5);
    }

    nav a.active {
      border-bottom-color: #fff;
    }

    .container {
      width: 100%;
      padding: calc(var(--nav-height) + 30px) 20px 40px 20px;
    }

    h2 {
      margin: 40px 0 15px 0;
      font-size: 26px;
      scroll-margin-top: calc(var(--nav-height) + 20px); 
    }

    table {
      width: 100%;
      border-collapse: collapse;
      table-layout: fixed;
      margin-bottom: 40px;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 12px;
      vertical-align: top;
      word-wrap: break-word;
    }

    th {
      background: #f4f4f4;
      font-weight: bold;
    }

    th:nth-child(1), td:nth-child(1) { width: 15%; }
    th:nth-child(2), td:nth-child(2) { width: 25%; }
    th:nth-child(3), td:nth-child(3) { width: 45%; }
    th:nth-child(4), td:nth-child(4) { width: 15%; text-align: center; }

    code { display: block; white-space: pre-wrap; }
  </style>
</head>

<body>

<nav>
  <a href="#string" class="nav-link">String Functions</a>
  <a href="#numeric" class="nav-link">Numeric Functions</a>
  <a href="#date" class="nav-link">Date Functions</a>
  <a href="#advance" class="nav-link">Advance Functions</a>
</nav>

<div class="container">

  <h2 id="string">STRING FUNCTIONS</h2>
  <table>
    <tr>
      <th>SQL Function</th>
      <th>Description</th>
      <th>Example Code</th>
      <th>Example Output</th>
    </tr>

    <?php foreach ($string_functions as $f): ?>
      <?php [$id, $name, $desc, $sql] = $f; ?>
      <tr>
        <td><b><?= htmlspecialchars($name) ?></b></td>
        <td><?= htmlspecialchars($desc) ?></td>
        <td><code><?= htmlspecialchars($sql) ?></code></td>
        <td><a href="view-string/<?= htmlspecialchars($id) ?>.php" target="_blank">View</a></td>
      </tr>
    <?php endforeach; ?>
  </table>

  <h2 id="numeric">NUMERIC FUNCTIONS</h2>
  <table>
    <tr>
      <th>SQL Function</th>
      <th>Description</th>
      <th>Example Code</th>
      <th>Example Output</th>
    </tr>

    <?php foreach ($numeric_functions as $f): ?>
      <?php [$id, $name, $desc, $sql] = $f; ?>
      <tr>
        <td><b><?= htmlspecialchars($name) ?></b></td>
        <td><?= htmlspecialchars($desc) ?></td>
        <td><code><?= htmlspecialchars($sql) ?></code></td>
        <td><a href="view-numeric/<?= htmlspecialchars($id) ?>.php" target="_blank">View</a></td>
      </tr>
    <?php endforeach; ?>
  </table>

 <h2 id="date">DATE FUNCTIONS</h2>
<table>
  <tr>
    <th>SQL Function</th>
    <th>Description</th>
    <th>Example Code</th>
    <th>Example Output</th>
  </tr>

  <?php foreach ($date_functions as $f): ?>
    <?php [$id, $name, $desc, $sql] = $f; ?>
    <tr>
      <td><b><?= htmlspecialchars($name) ?></b></td>
      <td><?= htmlspecialchars($desc) ?></td>
      <td><code><?= htmlspecialchars($sql) ?></code></td>
      <td><a href="view-date/<?= htmlspecialchars($id) ?>.php" target="_blank">View</a></td>
    </tr>
  <?php endforeach; ?>
</table>



<h2 id="advance">ADVANCE FUNCTIONS</h2>
<table>
  <tr>
    <th>SQL Function</th>
    <th>Description</th>
    <th>Example Code</th>
    <th>Example Output</th>
  </tr>

  <?php foreach ($advance_functions as $f): ?>
    <?php [$id, $name, $desc, $sql] = $f; ?>
    <tr>
      <td><b><?= htmlspecialchars($name) ?></b></td>
      <td><?= htmlspecialchars($desc) ?></td>
      <td><code><?= htmlspecialchars($sql) ?></code></td>
      <td><a href="view-advance/<?= htmlspecialchars($id) ?>.php" target="_blank">View</a></td>
    </tr>
  <?php endforeach; ?>
</table>


  <?php foreach ($advance_functions as $f): ?>
    <?php [$id, $name, $desc, $sql] = $f; ?>
    <tr>
      <td><b><?= htmlspecialchars($name) ?></b></td>
      <td><?= htmlspecialchars($desc) ?></td>
      <td><code><?= htmlspecialchars($sql) ?></code></td>
      <td><a href="view-advance/<?= htmlspecialchars($id) ?>.php" target="_blank">View</a></td>
    </tr>
  <?php endforeach; ?>
</table>


</div>

<script>
  const navHeight = document.querySelector("nav").offsetHeight;

  document.querySelectorAll('a.nav-link').forEach(a => {
    a.addEventListener("click", (e) => {
      const href = a.getAttribute("href");
      if (!href || !href.startsWith("#")) return;

      e.preventDefault();
      const id = href.slice(1);
      const el = document.getElementById(id);
      if (!el) return;

      const y = el.getBoundingClientRect().top + window.pageYOffset - (navHeight + 20);
      window.scrollTo({ top: y, behavior: "smooth" });
    });
  });

  const links = document.querySelectorAll(".nav-link");
  function setActive(id){
    links.forEach(l => l.classList.toggle("active", l.getAttribute("href") === "#" + id));
  }

  const sections = ["string","numeric","date","advance"]
    .map(id => document.getElementById(id))
    .filter(Boolean);

  const observer = new IntersectionObserver((entries) => {
    const best = entries
      .filter(e => e.isIntersecting)
      .sort((a,b) => b.intersectionRatio - a.intersectionRatio)[0];
    if (best && best.target && best.target.id) setActive(best.target.id);
  }, {
    threshold: [0.2, 0.35, 0.5, 0.65],
    rootMargin: `-${navHeight + 10}px 0px -60% 0px`
  });

  sections.forEach(s => observer.observe(s));
  setActive("string");
</script>

</body>
</html>
