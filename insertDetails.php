<?php 

    require_once 'config.php';

    $oldName = $_POST['old_username'];
    $newName = $_POST['new_username'];
    $renewName = $_POST['renew_username'];
    

    $sql = "INSERT INTO admin (old_username,new_username,renew_username) VALUES ('$oldName','$newName','$renewName') ";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Username Changed.')</script>";
        echo "<script>window.location = 'admin.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);

?>