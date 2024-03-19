<?php
        function insert_khunggio($giochieu,$id_lichchieu,$id_phong){
            $sql = "INSERT INTO khung_gio_chieu(gio_chieu,id_lichchieu,id_phong) values('$giochieu','$id_lichchieu','$id_phong')";
            pdo_execute($sql);
        }

        function delete_khunggio($id){
            $sql="DELETE FROM khung_gio_chieu where id=".$id;
            pdo_execute($sql);
        }

        function loadall_khunggio(){
            $sql="SELECT khung_gio_chieu.*,ngay_chieu,phong_chieu.ten_phong FROM khung_gio_chieu
             join lich_chieu on khung_gio_chieu.id_lichchieu=lich_chieu.id 
             join phong_chieu on khung_gio_chieu.id_phong=phong_chieu.id
             order by id desc";
            $listkhunggio = pdo_query($sql);
            return $listkhunggio;
        }

        function loadone_khunggio($id){
            $sql="SELECT * FROM khung_gio_chieu where id=".$id;
            $kg=pdo_query_one($sql);
            return $kg;
        }

        function update_khunggio($id,$giochieu,$id_lichchieu,$id_phong){
            $sql = "UPDATE khung_gio_chieu set gio_chieu='".$giochieu."', id_phong='".$id_phong."' where id=".$id;
            pdo_execute($sql);
        }
?>