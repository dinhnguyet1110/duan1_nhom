<?php
    function   insert_phim($tenphim, $motaphim, $thoiluong, $hinh, $ngaykchieu, $trailer, $trangthai,$idtl){
        $sql = "INSERT INTO phim(name, traller, avatar, mota, thoi_luong, idtl, ngaychieu, status) VALUES('$tenphim', '$trailer', '$hinh', '$motaphim', '$thoiluong', '$idtl', '$ngaykchieu', '$trangthai')";
        pdo_execute($sql);
    }

    function delete_phim($id){
        $sql="DELETE FROM phim where id=".$id;
        pdo_execute($sql);
    }
    function loadall_phim($kyw="",$idtl=0){
        $sql="SELECT * FROM phim where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($idtl>0){
            $sql.=" and idtl ='".$idtl."'";
        }
        $sql.=" ORDER BY id desc";
        $listphim = pdo_query($sql);
        return $listphim;
    }
    function loadp($id){
        $sql="select name from phim where id=".$id;
      return   pdo_query($sql);
    }

    

    function load_ten_theloai($idtl){
        if($idtl > 0){
            $sql = "SELECT * FROM the_loai WHERE id=".$idtl;
            $tl = pdo_query_one($sql);
            extract($tl);
            return $nametl;
           
        } else {
            return "";
        }
    }

    function loadone_phim($id){
        $sql="SELECT * FROM phim where id=".$id;
        $phim=pdo_query_one($sql);
        return $phim;
    }

    function update_phim($id, $tenphim, $motaphim, $thoiluong, $hinh, $ngaykchieu, $trailer, $trangthai)
{
    $sql = "";
    if ($hinh != "") {
        $sql = "UPDATE phim SET name='" . $tenphim . "', mota='" . $motaphim . "', thoi_luong='" . $thoiluong . "', avatar='" . $hinh . "', ngaychieu='" . $ngaykchieu . "', traller='" . $trailer . "', status='" . $trangthai . "' WHERE id=" . $id;
    } else {
        $sql = "UPDATE phim SET name='" . $tenphim . "', mota='" . $motaphim . "', thoi_luong='" . $thoiluong . "', ngaychieu='" . $ngaykchieu . "', traller='" . $trailer . "', status='" . $trangthai . "' WHERE id=" . $id;
    }
    pdo_execute($sql);
}


function loadall_phim_home(){
    $sql = "SELECT * FROM phim WHERE 1 ORDER BY id desc limit 0,12";
    $listphim = pdo_query($sql);
    return $listphim;
}

function loadone_ctphim($id){
    $sql="SELECT phim.*, nametl from phim join the_loai on phim.idtl=the_loai.id where phim.id=".$id;
    $phim=pdo_query_one($sql);
   
    return $phim;
}
function load_anhct($id){
    $sql="SELECT name from anhmota where anhmota.id_phim=".$id;
    $anhmota=pdo_query($sql);
   
    return $anhmota;
}

function load_khunggio($id){
    $sql="SELECT lich_chieu.id, ngay_chieu, gio_chieu, id_phong from lich_chieu join khung_gio_chieu on lich_chieu.id=khung_gio_chieu.id_lichchieu where lich_chieu.idphim=".$id;
    $khunggio=pdo_query($sql);  
    return $khunggio;
}


?>