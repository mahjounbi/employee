<?php
?>
<html>
  <head>
    <title>script get employee</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $employeeList = file_get_contents('employees.json');
      foreach (json_decode($employeeList, true) as $employee) 
      {
        $date = strtotime($employee["registered"]);
        if ($employee["isActive"] === true && date('Y', $date) >= 2021) 
        $newarray[] = $employee;
      }
      echo '<pre>';
      print_r(json_encode($newarray));
      echo '</pre>';
    ?>
  </body>
</html>