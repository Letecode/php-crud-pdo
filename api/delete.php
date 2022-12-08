<?php 

    if(
        $_POST['id']
    ) {
        include_once 'connection.php';

        $statement = $db->prepare("DELETE FROM apprenants WHERE id=" . $_POST['id']);
        $statement->execute();

        header('Location: ../index.php');
    } else {
        header('Location: ../index.php');
    }

?>