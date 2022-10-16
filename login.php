<?php
    //array to simulate a database of users
    $database = array(
        array("name@example.com", "1234")
    );

    //function to handle log in request
    function login(){
        //pull in the database
        global $database;
        //start the session
        session_start();
        //receive the post request parameters
        $email = $_POST['email'];
        $password = $_POST['password'];

        $found = false;
        
        //search the database for mathcing credentials
        foreach($database as $user ){
            if($user[0] == $email && $user[1] == $password){
                $found = true;
                break;
            }
        }

        //if the user was found
        if($found){
            //set logged in status to true
            $_SESSION['logged_in'] = true;
            //redirect to the main.php page
            header("Location: ../main.php");
        }else{
            //set error in the session
            $_SESSION['error'] = "Invalid Username and Password";
            //rediretc back to log in page
            header("Location: ../index.php");
        }
    }

    //call login function
    login();

?>