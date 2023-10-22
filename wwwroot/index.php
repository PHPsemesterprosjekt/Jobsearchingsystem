<?php
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST,"phone", FILTER_VALIDATE_INT);
    $password = $_POST["password"];
    $role = $_POST["role"];

    var_dump($firstname, $lastname, $email, $phone, $password, $role);

    $host = "localhost";
    $dbname = "jobsearchingsystem";
    $username = "root";
    $password = "";

    $conn = mysqli_connect(hostname: $host, 
                    username: $username, 
                    password: $password, 
                    database: $dbname);
    
    if (mysqli_connect_errno()) {
        die("COnnection error: " . mysqli_connect_error());
    }

    echo "Connection successful.";

    $sql = "INSERT INTO user(First_name, Last_name, Email, Phonenumber, IsEmployer, Password)
            VALUES (?, ?, ?, ?, ?, ?)"; 
    
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt,"ssssis", 
                            $firstname,
                            $lastname,
                            $email,
                            $phone,
                            $role,
                            $password);
    
    mysqli_stmt_execute($stmt);

    echo "Record saved.";
?>