<?php
?>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
    <body>
        <button id="button_1">Employee</button>
        <table class="table table-bordered table-sm" >
          <thead>
            <tr>
              <th>Profile</th>
              <th>Email</th>
              <th>Address</th>
              <th>Registered</th>
              <th>Active</th>
            </tr>
          </thead>
          <tbody id="table">
          </tbody>
        </table>
    </body>
</html>
<script type="text/javascript">
$("#button_1").click(function(e) {
    e.preventDefault();
    $.ajax({
        type: "GET",
        url: "employees.json",
        dataType: 'json',
        success: function(data) {
          var employee = '';
          $.each(data, function (key, value) {
            employee += '<tr>';
            employee += '<td>' + 
                value.profile.firstName +' '+ value.profile.lastName  + '</td>';

            employee += '<td>' + 
                value.email + '</td>';

            employee += '<td>' + 
                value.address + '</td>';

            employee += '<td>' + 
                value.registered + '</td>';

            employee += '<td>' + 
            value.isActive + '</td>';

            employee += '</tr>';
           })

           $('#table').append(employee);
        },
        error: function(result) {
            alert('error');
        }
    });
});
</script>