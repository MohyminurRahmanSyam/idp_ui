<?php 

$connection = mysqli_connect('localhost','root','','control_room');

if(isset($_POST['send'])){
    $override_date = $_POST['Date'];
    $override_status = $_POST['state'];
    $start_time = $_POST['s-time'];
    $end_time = $_POST['e-time'];
    $dir_from = $_POST['From'];
    $dir_to = $_POST['To'];

    $request = " insert into con_a1(override_date, override_status, start_time, end_time,	dir_from,	dir_to) values
    ('$override_date', '$override_status', '$start_time', '$end_time', '$dir_from', '$dir_to')";

    mysqli_query($connection, $request);

    header('location:controlroom_a1.php');
}
else{
    echo 'something went wrong';
}

?>

  

         

