<?php
include('security.php');

if(isset($_POST['registerbtn']))
{
    $id=$_POST['id'];
    $sname = $_POST['sname'];
    $ctype = $_POST['ctype'];
    $instruct = $_POST['instruct'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sname_query = "SELECT * FROM register WHERE sname='$sname'&& ctype='$ctype' ";
    $sname_query_run = mysqli_query($connection, $sname_query);
    if(mysqli_num_rows($sname_query_run) > 0)
    {
        $_SESSION['status'] = "Subject and course type Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: 404.php');  
    }
    else
    {
        
           $query = "INSERT INTO register (sname,ctype,instruct,date,time) VALUES ('$sname','$ctype','$instruct','$date','$time')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Subject Added";
                $_SESSION['status_code'] = "success";
                header('Location: adindex.php');
            }
            else 
            {
                $_SESSION['status'] = "Subject not added Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: 404.php');  
            }
        }
        
    

}

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $sname = $_POST['edit_sname'];
    $ctype = $_POST['edit_ctype'];
    $instruct = $_POST['edit_instruct'];
    $date = $_POST['edit_date'];
    $time = $_POST['edit_time'];

    $query = "UPDATE register SET sname='$sname', ctype ='$ctype ', instruct='$instruct' , date='$date' , time='$time' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: adindex.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: 404.php'); 
    }
}
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is deleted";
        $_SESSION['status_code'] = "success";
        header('Location: adindex.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT deleted";
        $_SESSION['status_code'] = "error";
        header('Location: 404.php'); 
    }
}
?>
