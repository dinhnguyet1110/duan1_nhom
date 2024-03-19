<?php
        function insert_theloai($tenloai){
            $sql = "INSERT INTO the_loai(nametl) values('$tenloai')";
            pdo_execute($sql);
        }

        function delete_theloai($id){
            $sql="DELETE FROM the_loai where id=".$id;
            pdo_execute($sql);
        }

        function loadall_theloai(){
            $sql="SELECT * FROM the_loai order by id desc";
            $listtheloai = pdo_query($sql);
            return $listtheloai;
        }

        function loadone_theloai($id){
            $sql="SELECT * FROM the_loai where id=".$id;
            $tl=pdo_query_one($sql);
            return $tl;
        }

        function update_theloai($id,$tenloai){
            $sql = "UPDATE the_loai set nametl='".$tenloai."' where id=".$id;
            pdo_execute($sql);
        }
?>