<?php
    require_once 'config.php';

    $fname = $_POST['name'];
    $femail = $_POST['email'];
    $feedback = $_POST['feedback'];

    $sql = "INSERT INTO feedback (Name, Email, Feedback_Discrip) VALUES ('$fname','$femail','$feedback') ";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Your feedback sent...')</script>";
        echo "<script>window.location = 'index.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
?>

