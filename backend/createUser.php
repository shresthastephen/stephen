<?php 
    if($_POST){
        $formFname=$_POST['fname'];
        $formLname=$_POST['lname'];
        $formEmail=$_POST['email'];
        $formPassword=$_POST['password'];
        $encryptedPw=md5($formPassword);

        include "connection.php";

        if($connection){    
            $sql="SELECT fname FROM signin where fname='$formFname' OR email='$formEmail'";
            $result=mysqli_query($connection, $sql);

            if(!mysqli_num_rows($result)>0 ){
                $sql="INSERT INTO signin(fname, lname, email, pw) VALUES ('$formFname', '$formLname', '$formEmail', '$encryptedPw')";
                mysqli_query($connection, $sql);

                echo "Registration successful";
            }
            else{
                echo "Cannot Register! User already Exist!!";
            }
        }    
        mysqli_close($connection);
    }
?>