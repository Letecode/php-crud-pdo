<?php 

    if($_POST['name'] and 
        $_POST['email'] and
        $_POST['country'] and
        $_POST['gender']
    ) {

        include_once 'connection.php';

        $query = "INSERT INTO apprenants ( name, email, country, gender ) VALUES ( :name, :email, :country, :gender )";
        $statement = $db->prepare($query);
            
        $result = $statement->execute( array( ':name'=>$_POST['name'], ':email'=>$_POST['email'], ':country'=>$_POST['country'], ':gender'=>$_POST['gender'] ) );
        if (!empty($result) ){
            header('location: ../index.php');
        } else {
            echo 'Erreur ...';
        }

    } else {
        header('Location: ../index.php');
    }

?>