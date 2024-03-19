<?php
        function insert_phong($ten_phong){
            $sql = "INSERT INTO phong_chieu(ten_phong)values('$ten_phong')";
            pdo_execute($sql);
        }

        function delete_phong($id){
            $sql="DELETE FROM phong_chieu where id=".$id;
            pdo_execute($sql);
        }

        function loadall_phong(){
            $sql="SELECT * FROM phong_chieu order by id desc";
            $listphong = pdo_query($sql);
            return $listphong;
        }

        function loadone_phong($id){
            $sql="SELECT * FROM phong_chieu where id=".$id;
            $phong=pdo_query_one($sql);
            return $phong;
        }

        function update_phong($id,$ten_phong){
            $sql = "UPDATE phong_chieu set ten_phong='".$ten_phong."' where id=".$id;
            pdo_execute($sql);
        }


?>