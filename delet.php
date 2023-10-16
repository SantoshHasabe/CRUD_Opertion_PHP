<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid']; 
        $sql="delete from `crud` where id=$id";
        $result=mysqli_query($con, $sql);
        if($result){
            // header('location:display.php');
            ?>
            <script>
                alert('Are you sure, you want to delete.');
                window.open("http://localhost/CRUD1/display.php","_self");
            </script>
            <?php
        }
    }
?>