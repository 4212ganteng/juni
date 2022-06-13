<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome dude</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
<div class="container">
    <div class="greeting">
    <h1>Hello, Welcome <strong><?php echo $_POST['nama'] ?></strong> </h1>
    </div>
    
    <table class="table table-dark table-striped">
  <tr>
     <th>
         First Name
     </th>
     <th>
         Last Name
     </th>
     <th>
       Email
     </th>
     <th>
        Password
     </th>
     <th>
        Address
     </th>
     <th>
         City
     </th>
     <th>
         Zip
     </th>
     <th>
         State
     </th>
  </tr>

  <tr>
     <td>
         <?php echo $_POST['nama'] ?>
     </td>
     <td>
     <?php echo $_POST['nama2'] ?>
     </td>
     <td>
     <?php echo $_POST['email'] ?>
     </td>
     <td>
     <?php echo $_POST['password'] ?>
     </td>
     <td>
     <?php echo $_POST['address'] ?>
     </td>
     <td>
     <?php echo $_POST['city'] ?>
     </td>
     <td>
     <?php echo $_POST['zip'] ?>
     </td>
     <td>
     <?php echo $_POST['state'] ?>
     </td>
  </tr>
</table>


</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>




