<?php

$name = $_POST['name'];
$password = $_POST['password'];


if (!empty($name) ||!empty($password)) {
    
    $servername = "localhost";
    $username = "root";
    $dbpassword = "Sani_1234";
    $dbname = "hostel_accomedation";  

    $connection = mysqli_connect($servername, $username,$dbpassword,$dbname);

    if (!connection) {
        die("Connection failed : " . mysqli_connect_error());

    } 
    else {
        $sql = "SELECT name FROM student where name = '$name' and password= '$password' ";

        if (mysqli_query($connection, $sql)) {
            echo "<script>
            alert('Hello $name');
            window.location.href='../html/dashboard.html';
            </script>"; 
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
            
    }

}
else {
    echo "All field required!!!";
}

?>