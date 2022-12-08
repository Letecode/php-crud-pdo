<?php 

    if($_POST['name'] and 
        $_POST['email'] and
        $_POST['country'] and
        $_POST['gender'] and 
        $_POST['id']
    ) {
        include_once 'connection.php';
        
        $statement = $db->prepare("UPDATE apprenants SET name='". $_POST[ 'name' ] ."', email='" . $_POST[ 'email' ]. "', country='" . $_POST[ 'country' ]. "', gender='" . $_POST[ 'gender' ]. "' where id=" . $_POST["id"]);
        $update = $statement->execute();
        
        if(!$update) {
            echo "Error";
        } else {
            header('Location: ../index.php');
        }


    } else {
        header('Location: ../index.php');
    }

?>