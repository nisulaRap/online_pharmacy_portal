    <?php

    require_once 'config.php';

    $Fname = $_POST['name'];
    $Salutation =$_POST['salutation'];
    $Email=$_POST['email'];
    $ContactNumber=$_POST['contactNumber'];
    $Comment=$_POST['comment'];

    $sql ="INSERT INTO ContactUs(name,salutation,email,contactNumber,comment) VALUES('$Fname','$Salutation','$Email','$ContactNumber','$Comment')";
    $result =mysqli_query($con,$sql);

    if($result)
    {
        echo "<script>alert('Your details Sent..')</script>";
        echo "<script>window.location='ContactUs.php'</script>";
    }
    else
    {
        echo"Error".$sql."<br>".mysqli_error($con);
    }
    mysqli_close($con)
?>
