<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container col-3 ">

<div class="form">
<div class=" mt-5 mb-4">
   <h2> Form Registration</h2>
  </div>
    <form action = "welcome.php" method = "post">

    <div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="nama">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="nama2">
  </div>
</div>


  <div class="col">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
  </div>
  <div class="col">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="password" name="password">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St " name="address">
  </div>
  <div class="row">
  <div class="col">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" placeholder="city" name="city">
  </div>
  <div class="col">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip" placeholder="1234" name="zip">
  </div>
  </div>
  <div class="col mb-5">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name="state">
      <option selected>Choose...</option>
      <option>Indonesia</option>
      <option>Amerika</option>
      <option>Rusia</option>
    </select>
  </div>
  
 
   
 
  <button type="submit" class="btn btn-primary">Submit</button>



    </form>
</div>
</div>


  







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>