<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Exam Portal</title>
</head>
<body>
<div class="container">
        <div class="login-box">
        <div class="row">
        <div class="column login-left">
           <h2>LOGIN</h2>
           <form action="validation.php" method="post">
              <div class="form-group">
                 <label>Email</label>
                <input type="text" name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label>PASSWORD</label>
                <input type="password" name="password" class="form-control" required> 
              </div>
              <button type="submit" class="btn btn-primary"> LOGIN </button>
             </form>
        </div>

        <form action="registration.php" method="post">
        <div class="column login-right">
           <h2>REGISTER</h2>
           <form action="registration.php" method="post">
           <div class="form-group">
                 <label>FULL NAME</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="form-group">
                 <label>USER NAME</label>
                <input type="text" name="user" class="form-control" required>
              </div>
              <div class="form-group">
                 <label>EMAIL</label>
                <input type="email" name="email" class="form-control"required>
              </div>
              <div class="form-group">
                <label>PASSWORD</label>
                <input type="password" name="password" class="form-control"> 
              </div>
              <button type="submit" class="btn btn-primary"> REGISTER </button>
             </form>
        </div>
</form>
        </div>
     </div>
  </div>
</body>
</html>