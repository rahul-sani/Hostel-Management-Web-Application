<?php

$name = $_POST['name'];
$password = $_POST['password'];

if(isset($_POST['login'])) {
    $servername = "localhost";
    $username = "r4hu1";
    $dbpassword = "Sani_1234";
    $dbname = "hostel_accomedation";  

    $connection = mysqli_connect($servername, $username,$dbpassword,$dbname);

    if(!$connection) {
        die("Connection failed : " . mysqli_connect_error());
    } else {
        $sql = "SELECT name FROM student where name = '$name' and password= '$password' ";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) != 0)
            {
        
            setcookie('username',$name,time()+3600);
            setcookie('pass',$password,time()+3600);

            session_start();
            $_SESSION['username'] = $name;

            header('location: dashboard.php');
            } else {

                echo "<script>
               window.location.href='../login.php';
               alert('User not found ');
               </script>";
 
            }
    }

    
}
else {
    header('location: ../login.php');
}




    // if (!$connection) {
    //     die("Connection failed : " . mysqli_connect_error());

    // } 
    // else {
    //     $sql = "SELECT name FROM student where name = '$name' and password= '$password' ";
    //     $result = mysqli_query($connection, $sql);
    //     // echo (boolval($result));
    //     if (mysqli_num_rows($result) != 0)
    //     {
    //         echo "found";
    //     } else {
    //         echo "<script>
    //        alert('User not found ');
    //        </script>"
           
    //     }


        // if(mysqli_query($connection, $sql)) {
        //     echo "<script>
        //     alert('Hello $name');
        //     window.location.href='../html/dashboard.html';
        //     </script>"; 
        // } 
        // else {
        //     echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        // }
            
//     }

// }
// else {
//     header('location: ../html/registration.html');
// }

?>