<?php
            include 'connectdb.php';
            $pst_id = $_GET['pst_id'];
            $sql = "delete from project_status where pst_id='$pst_id'";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo 'ลบแล้ว';
                header('refresh: 2; project_status_list.php');
            }else{
                echo 'ลบไม่ได้';
                header('refresh: 2; project_status_list.php');
            }
            mysqli_close($conn);
        ?>