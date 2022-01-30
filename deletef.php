<?php 

    include('conexion.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM filess WHERE id = $id";
        $result = mysqli_query($con, $query);
        if(!$result){
            die('Query Failed');
        }

        header('Location: adminServ.php');
    }

?>