<?php
            include 'connectdb.php';
            $ptt_id = $_GET['ptt_id'];
            $sql = "delete from project_type where ptt_id='$ptt_id'";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo 'ลบแล้ว';
                header('refresh: 2; project_type_list.php');
            }else{
                echo 'ลบไม่ได้';
                header('refresh: 2; project_type_list.php');
            }
            mysqli_close($conn);
        ?>