<?php
// this intialises variables to store the msg error and user inputs 
// and it ensures that the variables are defined before use preventing underdefined variable errors
$nameErr = $emailErr = "";
$name = $email ="";

//if($_SERVER["REQUEST_METHOD"]=="POST") THIS CHECKS IF THE FORM WAS SUBMITTED USING THE POST METHOD.
if ($_SERVER["REQUEST_METHOD"]=="POST"){

    //HAVE DEVANU NAME VALIDATION ACCORDING TO THE REQUIREMENT OF THE HTML CODE 
    if (empty($_POST["name"])){
        //if(empty($-POST["NAME])) - AA CHECK KARE KE NAME FIELD EMPTY CHHE?

        $nameErr = "Name is required";
    }else{
        //$name = trim($_POST["name"]) - AA removes any leading whitespace from the input.
        $name = trim($_POST["name"]);
        // ^ means it starts of the string and $ it ends the string 
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)){
            $nameErr = "only letters and white space allowed";
        }

    }
    if (empty($nameErr) && empty($emailErr)){
        echo "Form submitted Successfully!";

    }else{
        echo $nameErr . "<br>" . $emailErr;
    }
}
?>