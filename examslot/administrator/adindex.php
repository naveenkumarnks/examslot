<?php

session_start();
if(!isset($_SESSION['adminname'])){
    header('location:admin.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <style>
body{
  padding: 25px;
  font-size: 20px;
  background:url(nks2.jpg);
  background-size: cover;
    background-position: flex;
    
}
.modal-body, .modal-header, .modal-footer{
  padding: 25px;
  font-size: 25px;
}


</style>
</head>
<body >

<div class="modal fade" id="addsubject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Subject Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> SUBJECT NAME </label>
                <select type="text" name="sname" class="form-control" placeholder="Enter Subject name">
                <option value="18IT101-ENGINEERING MATHEMATICS I ">18IT101-ENGINEERING MATHEMATICS I</option>
<option value="18IT102-ENGINEERING PHYSICS I ">18IT102-ENGINEERING PHYSICS I</option>
<option value="18IT103-ENGINEERING CHEMISTRY I ">18IT103-ENGINEERING CHEMISTRY I</option>
<option value="18IT104-COMPUTER PROGRAMMING I ">18IT104-COMPUTER PROGRAMMING I</option>
<option value="18HS101-COMMUNICATIVE ENGLISH I ">18HS101-COMMUNICATIVE ENGLISH I</option>
<option value="18IT106-HARDWARE ASSEMBLING AND SOFTWARE TOOLS LABORATORY ">18IT106-HARDWARE ASSEMBLING AND SOFTWARE TOOLS LABORATORY</option>
<option value="18IT201-ENGINEERING MATHEMATICS II ">18IT201-ENGINEERING MATHEMATICS II</option>
<option value="18IT202-ENGINEERING PHYSICS II ">18IT202-ENGINEERING PHYSICS II</option>
<option value="18IT203-ENGINEERING CHEMISTRY II ">18IT203-ENGINEERING CHEMISTRY II</option>
<option value="18IT204-COMPUTER PROGRAMMING II ">18IT204-COMPUTER PROGRAMMING II</option>
<option value="18HS201-LANGUAGE ELECTIVE:COMMUNICATIVE ENGLISH II ">18HS201-LANGUAGE ELECTIVE:COMMUNICATIVE ENGLISH II</option>
<option value="18IT206-BASICS OF ELECTRICAL AND ELECTRONICS ENGINEERING ">18IT206-BASICS OF ELECTRICAL AND ELECTRONICS ENGINEERING</option>
<option value="18IT207-ENGINEERING GRAPHICS ">18IT207-ENGINEERING GRAPHICS</option>
<option value="18IT301-ENGINEERING MATHEMATICS III ">18IT301-ENGINEERING MATHEMATICS III</option>
<option value="18IT302-DIGITAL SYSTEM DESIGN ">18IT302-DIGITAL SYSTEM DESIGN</option>
<option value="18IT303-COMPUTER ORGANIZATION AND ARCHITECTURE ">18IT303-COMPUTER ORGANIZATION AND ARCHITECTURE</option>
<option value="18IT304-DATA STRUCTURES AND ALGORITHMS ">18IT304-DATA STRUCTURES AND ALGORITHMS</option>
<option value="18IT305-OBJECT ORIENTED PROGRAMMING WITH CPP and JAVA ">18IT305-OBJECT ORIENTED PROGRAMMING WITH CPP and JAVA</option>
<option value="18IT306-SOFTWARE ENGINEERING ">18IT306-SOFTWARE ENGINEERING</option>
<option value="18IT307-DIGITAL SYSTEM DESIGN LABORATORY ">18IT307-DIGITAL SYSTEM DESIGN LABORATORY</option>
<option value="18IT308-DATA STRUCTURES AND ALGORITHMS LABORATORY ">18IT308-DATA STRUCTURES AND ALGORITHMS LABORATORY</option>
<option value="18GE301-SOFT SKILLS - VERBAL ABILITY ">18GE301-SOFT SKILLS - VERBAL ABILITY</option>
<option value="18IT401-ENGINEERING MATHEMATICS IV ">18IT401-ENGINEERING MATHEMATICS IV</option>
<option value="18IT402-DATABASE MANAGEMENT SYSTEMS ">18IT402-DATABASE MANAGEMENT SYSTEMS</option>
<option value="18IT403-WEB TECHNOLOGY ">18IT403-WEB TECHNOLOGY</option>
<option value="18IT404-PRINCIPLES OF COMMUNICATION ">18IT404-PRINCIPLES OF COMMUNICATION</option>
<option value="18IT405-SYSTEM SOFTWARE ">18IT405-SYSTEM SOFTWARE</option>
<option value="18IT406-COMPUTER NETWORKS ">18IT406-COMPUTER NETWORKS</option>
<option value="18IT407-DATABASE MANAGEMENT SYSTEMS LABORATORY ">18IT407-DATABASE MANAGEMENT SYSTEMS LABORATORY</option>
<option value="18IT408-COMPUTER NETWORKS LABORATORY ">18IT408-COMPUTER NETWORKS LABORATORY</option>
<option value="18HS001-ENVIRONMENTAL SCIENCE ">18HS001-ENVIRONMENTAL SCIENCE</option>
<option value="18GE401-SOFT SKILLS-BUSINESS ENGLISH ">18GE401-SOFT SKILLS-BUSINESS ENGLISH</option>
<option value="18IT501-CLOUD COMPUTING ">18IT501-CLOUD COMPUTING</option>
<option value="18IT502-OPERATING SYSTEMS ">18IT502-OPERATING SYSTEMS</option>
<option value="18IT503-COMPUTATIONAL THEORY AND COMPILERS ">18IT503-COMPUTATIONAL THEORY AND COMPILERS</option>
<option value="18IT504-DIGITAL SIGNAL PROCESSING ">18IT504-DIGITAL SIGNAL PROCESSING</option>
<option value="18IT507-CLOUD COMPUTING LABORATORY ">18IT507-CLOUD COMPUTING LABORATORY</option>
<option value="18IT508-OPERATING SYSTEMS LABORATORY ">18IT508-OPERATING SYSTEMS LABORATORY</option>
<option value="18GE501-SOFT SKILLS - APTITUDE I ">18GE501-SOFT SKILLS - APTITUDE I</option>
<option value="18HS003-PRINCIPLES OF MANAGEMENT ">18HS003-PRINCIPLES OF MANAGEMENT</option>
<option value="18IT602-ARTIFICIAL INTELLIGENCE ">18IT602-ARTIFICIAL INTELLIGENCE</option>
<option value="18IT603-INFORMATION CODING TECHNIQUES ">18IT603-INFORMATION CODING TECHNIQUES</option>
<option value="18IT604-DATA MINING AND WAREHOUSING ">18IT604-DATA MINING AND WAREHOUSING</option>
<option value="18IT607-ARTIFICIAL INTELLIGENCE LABORATORY ">18IT607-ARTIFICIAL INTELLIGENCE LABORATORY</option>
<option value="18IT608-DATA MINING AND WAREHOUSING LABORATORY ">18IT608-DATA MINING AND WAREHOUSING LABORATORY</option>
<option value="18GE601-SOFT SKILLS-APTITUDE II ">18GE601-SOFT SKILLS-APTITUDE II</option>
<option value="18HS002-PROFESSIONAL ETHICS IN ENGINEERING ">18HS002-PROFESSIONAL ETHICS IN ENGINEERING</option>
<option value="18IT702-INTERNET OF THINGS ">18IT702-INTERNET OF THINGS</option>
<option value="18IT703-DESIGN AND ANALYSIS OF ALGORITHMS ">18IT703-DESIGN AND ANALYSIS OF ALGORITHMS</option>
<option value="18IT704-INFORMATION SECURITY ">18IT704-INFORMATION SECURITY</option>
<option value="18IT707-DESIGN AND ANALYSIS OF ALGORITHMS LABORATORY ">18IT707-DESIGN AND ANALYSIS OF ALGORITHMS LABORATORY</option></select>
            </div>
            <div class="form-group">
                <label>COURSE TYPE</label>
                <select type="text" name="ctype" class="form-control" placeholder="Enter Course Type">
                <option value="SMART COURSE">SMART COURSE</option>
<option value="REGULAR COURSE">REGULAR COURSE</option></select>
            </div>
            <div class="form-group">
                <label>INSTRUCTION</label>
                <input type="text" name="instruct" class="form-control" placeholder="Enter Instruction">
            </div>
            <div class="form-group">
                <label>DATE</label>
                <input type="date" name="date" class="form-control" placeholder="Confirm Date">
            </div>
            <div class="form-group">
                <label>TIME</label>
                <input type="time" name="time" class="form-control" placeholder="Confirm Time">
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addsubject">
       Add Subject Data 
</button>
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
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
                            <th>EDIT</th>
                            <th>DELETE</th>
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
                                <td><?php  echo $row['sname']; ?></td>
                                <td><?php  echo $row['ctype']; ?></td>
                                <td><?php  echo $row['instruct']; ?></td>
                                <td><?php  echo $row['date']; ?></td>
                                <td><?php  echo $row['time']; ?></td>
                                <td>
                                <form action="register_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
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

</div>
    
</body>
</html>