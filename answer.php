<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Salary, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Peter Zerbinos" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-indigo.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Salary, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Salary, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/income_tax.jpg" alt="tax image" width="250" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          $hoursWorked = $_GET["hours-worked"];
          $hourlyWage = $_GET["hourly-wage"];

          // Process
          $pay = ($hoursWorked * $hourlyWage) * (1 - 0.18);
          $tax = ($hoursWorked * $hourlyWage) * 0.18;

          // Output
          echo "Your pay will be: $"  . (round($pay, 2)) . "";
          echo "<br />";
          echo "<br />";
          echo "The government will take: $" . (round($tax, 2)) . "";
          ?>
        </div>
      </div>
    </main>
  </div>
</body>

</html>
