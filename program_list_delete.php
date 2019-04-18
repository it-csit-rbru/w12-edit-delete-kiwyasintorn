<?php
            include 'connectdb.php';
            $prg_id = $_GET['prg_id'];
            $sql = "delete from program where prg_id='$prg_id'";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo 'ลบแล้ว';
                header('refresh: 2; program_list.php');
            }else{
                echo 'ลบไม่ได้';
                header('refresh: 2; program_list.php');
            }
            mysqli_close($conn);
        ?>