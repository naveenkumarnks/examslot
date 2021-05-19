<?php

session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');
}

?>

<html>
    <head>
        <title>home page</title>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<style>
body{
  padding: 25px;
  font-size: 25px;
  background:url(nks3.jpg);
  background-size: cover;
    background-position: flex;
    
}
.container{
  padding:0.01em 16px
}
.center{
  text-align:center!important
}
.padding{
  padding-top:32px!important;
  padding-bottom:32px!important
}


</style>
<body>
  <div class="container">

  
<a class="float-right" href="logout.php"><button style="font-size: 14px;background: rgba(255, 255, 255, 0.5);">LOGOUT</button></a>
   <header class="container center padding"> 
  <h1><b>WELCOME :<?php echo $_SESSION['email'];?></b></h1>
</header>
   <div class="card-body">
            <div class="table-responsive">
            <?php
            $server_name = "localhost";
            $db_username = "root";
            $db_password = "";
            $db_name = "user_registeration";
            
            $connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);
                $query = "SELECT * FROM register";
                $query_run = mysqli_query($connection, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SUBJECT NAME</th>
                            <th>COURSE TYPE</th>
                            <th>INSTRUCTION</th>
                            <th>DATE</th>
                            <th>TIME</th>
                            <th>EXAM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td style="font-size: 14px;"><?php  echo $row['sname']; ?></td>
                                <td><?php  echo $row['ctype']; ?></td>
                                <td><?php  echo $row['instruct']; ?></td>
                                <td><?php  echo $row['date']; ?></td>
                                <td><?php  echo $row['time']; ?></td>
                                <td>
                                <form action="test.php">
                                        <input type="hidden"  value="<?php echo $row['id']; ?>">
                                       <button type="submit"  name="test_btn" class="btn btn-success"> Take Exam</button>
                                       </form>
                                </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
            </div>
</div>
</body>
</html>