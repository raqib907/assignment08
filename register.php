



<?php




if($_SERVER["REQUEST_METHOD"] == "POST"){
    $first_name = $_POST["first_name"];
   echo $first_name. "<br>";
    $last_name = $_POST["last_name"];
    echo $last_name. "<br>";
    $email = $_POST["email"];
    echo $email . "<br>";
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if($password == $confirm_password){
        // code to save the data to the database goes here

        echo "Registration Successful!";

    }
    else{
        echo "Password and Confirm Password do not match!";
    }
}

