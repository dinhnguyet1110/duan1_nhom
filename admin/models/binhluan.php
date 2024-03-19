<?php
    function insert_binhluan($noidung,$user,$idphim,$ngaybinhluan){
        $sql = "INSERT INTO binhluan(noidung,user,idphim,ngaybinhluan) values('$noidung','$user','$idphim','$ngaybinhluan')";
        pdo_execute($sql);
    }

    function loadall_binhluan($idphim){
        $sql="SELECT * FROM binhluan where 1";
        if($idphim>0) $sql.=" AND idphim='".$idphim."'"; 
        $sql.=" order by id desc";      
        $listbl = pdo_query($sql);
        return $listbl;
    }
    function delete_binhluan($id){
        $sql="DELETE FROM binhluan where id=".$id;
        pdo_execute($sql);
    }
?>