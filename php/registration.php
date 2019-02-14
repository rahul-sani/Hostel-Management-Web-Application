<?php

$name = $_POST['name'];
$sem = $_POST['sem'];
$hostelName = $_POST['hostelName'];
// var_dump($hostelName);
$sex= $_POST['sex'];
// var_dump($sex);
$password = $_POST['password'];

if (!empty($name) || !empty($sem) || !empty($hostelName) || !empty($sex) || !empty($password)) {

    $servername = "localhost";
    $username = "root";
    $dbpassword = "Sani_1234";
    $dbname = "hostel_accomedation";  

    $connection = mysqli_connect($servername, $username,$dbpassword,$dbname);
    if(!$connection) {
        die("connection failed: " . mysqli_connect_error());
    }
    else {
        
       
        $sql = "INSERT INTO student(name,password,hostelName,sex,sem) VALUE ('$name','$password','$hostelName','$sex',$sem)" ;
        
        if (mysqli_query($connection, $sql)) {
            echo "<script>
            alert('succesfully registered!');
            window.location.href='../registration.html';
            </script>";  
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        // $stmt = $connection->prepare("INSERT INTO student(name, password, hostelName, sex, sem) VALUES (?,?,?,?,?)");
        // $stmt->bind_param("ssssi",$name,$password,$hostelName,$sex,$sem);
        // $stmt->execute();
        // $stmt->close();
        // $connection->close();
        
        // echo "Connection sucesful";z

    }

}
else {
    echo "All field required";
} 


?>