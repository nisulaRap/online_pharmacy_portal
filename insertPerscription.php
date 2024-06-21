<?php 

    require_once 'config.php';

    $pname = $_POST['name'];
    $page = $_POST['age'];
    $pemail = $_POST['email'];
    $pcnum = $_POST['contact'];
    $pmessage = $_POST['message'];
    $pimage = $_POST['prescription'];

    $sql = "INSERT INTO prescription (Name, Age, Email, Contact_No, Message, Image) VALUES ('$pname','$page','$pemail','$pcnum','$pmessage','$pimage')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Your prescription sent...')</script>";
        echo "<script>window.location = 'prescription.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
?>