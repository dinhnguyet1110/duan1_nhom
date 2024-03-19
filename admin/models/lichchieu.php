<?php
        function insert_lichchieu($idphim,$ngaychieu,$trangthai){
            $sql = "INSERT INTO lich_chieu(idphim,ngay_chieu,trang_thai) values('$idphim','$ngaychieu','$trangthai')";
            pdo_execute($sql);
        }

        function delete_lichchieu($id){
            $sql="DELETE FROM lich_chieu where id=".$id;
            pdo_execute($sql);
        }

        function loadall_lichchieu(){
            $sql="SELECT lich_chieu.*,phim.name FROM lich_chieu join phim on lich_chieu.idphim=phim.id order by id desc";
            $listlichchieu = pdo_query($sql);
            return $listlichchieu;
        }


        function loadone_lichchieu($id){
            $sql="SELECT * FROM lich_chieu where id=".$id;
            $kg=pdo_query_one($sql);
            return $kg;
        }

        function update_lichchieu($id,$idphim,$ngaychieu,$trangthai){
            $sql = "UPDATE lich_chieu set idphim='".$idphim."', ngay_chieu='".$ngaychieu."', trang_thai='".$trangthai."'  where id=".$id;
            pdo_execute($sql);
        }

        function load_ngay($id){
            $sql="SELECT id, ngay_chieu FROM lich_chieu where lich_chieu.idphim=".$id;
            $ngay = pdo_query($sql);
            return $ngay;
        }
        function load_gio($id){
            $sql="SELECT id_phong, gio_chieu FROM khung_gio_chieu where id_lichchieu=".$id;
            $gio = pdo_query($sql);
            return $gio;
        }

        function loadall_bongnuoc(){
            $sql="SELECT * FROM bong_nuoc order by id asc";
            $listbongnuoc = pdo_query($sql);
            return $listbongnuoc;
        }   

        function ve($idkhunggio){
            $sql="SELECT khung_gio_chieu.id as'idkhunggio',phong_chieu.id as'idphong',lich_chieu.ngay_chieu,phim.name,khung_gio_chieu.gio_chieu,phong_chieu.ten_phong from khung_gio_chieu
            join lich_chieu on khung_gio_chieu.id_lichchieu=lich_chieu.id
            join phim on lich_chieu.idphim=phim.id
            join phong_chieu on phong_chieu.id=khung_gio_chieu.id_phong where khung_gio_chieu.id=".$idkhunggio;
            return pdo_query($sql);

        }
        
        function insert_ve($iduser,$tongtien,$ghe,$idkhunggio,$idphong,$ngaydat){
            $sql = "INSERT INTO ve(iduser,idkhunggio,idphong,ghe,ngaydat,tongtien,trangthai,idcombo) values('$iduser','$idkhunggio','$idphong','$ghe','$ngaydat','$tongtien','Chưa thanh toán',0)";
            pdo_execute($sql);
        }
        function insert_anhmota($idphim, $hinh){
            $sql = "INSERT INTO anhmota(name,Id_phim) values('$hinh','$idphim')";
            pdo_execute($sql);
        }
        function load_anhmota(){
            $sql="select anhmota.id,phim.id as idphim,phim.name as name1,anhmota.name as name2 from anhmota join phim where phim.id=anhmota.id_phim order by anhmota.id desc;";
            return pdo_query($sql);
        }
        function delete_anhmota($id){
            $sql="delete from anhmota where anhmota.id=".$id;
            pdo_execute($sql);
        }
  
        function update_ve($idcombo,$tongtien,$id){
            $sql = "UPDATE ve set idcombo='".$idcombo."', tongtien='".$tongtien."', trangthai='Đã thanh toán'  where id=".$id;
            pdo_execute($sql);
        }
        // lịch sử vé người dùng
        function load_bill_tk($id){
            $sql = "SELECT ve.id as'idve',taikhoan.user as'user',phim.name as'ten_phim',lich_chieu.ngay_chieu as'ngaychieu',khung_gio_chieu.gio_chieu as'gio',ve.ngaydat as ngay_dat,phong_chieu.ten_phong as'phong',ve.ghe as'ghe',ve.tongtien-bong_nuoc.gia as'giaghe',bong_nuoc.ten_combo as'combo',bong_nuoc.gia as'giacombo',ve.tongtien as'tongtien',ve.trangthai as'trangthai' from ve 
            join taikhoan on taikhoan.id=ve.iduser 
            join khung_gio_chieu on khung_gio_chieu.id=ve.idkhunggio 
            join bong_nuoc on bong_nuoc.id=ve.idcombo 
            join phong_chieu on phong_chieu.id=ve.idphong 
            join lich_chieu on lich_chieu.id=khung_gio_chieu.id_lichchieu 
            join phim on phim.id=lich_chieu.idphim 
            where ve.iduser=".$id." order by ve.id desc";
            $bill=pdo_query($sql);
           return $bill;
        }
        // lịch sử vé ở admin
        function load_bill($kyw){
           
            $sql = "SELECT ve.id, taikhoan.user as'user',phim.name as'ten_phim',lich_chieu.ngay_chieu as'ngaychieu',khung_gio_chieu.gio_chieu as'gio',ve.ngaydat as ngay_dat,phong_chieu.ten_phong as'phong',ve.ghe as'ghe',ve.tongtien-bong_nuoc.gia as'giaghe',bong_nuoc.ten_combo as'combo',bong_nuoc.gia as'giacombo',ve.tongtien as'tongtien',ve.trangthai as'trangthai' from ve join taikhoan on taikhoan.id=ve.iduser join khung_gio_chieu on khung_gio_chieu.id=ve.idkhunggio join bong_nuoc on bong_nuoc.id=ve.idcombo join phong_chieu on phong_chieu.id=ve.idphong join lich_chieu on lich_chieu.id=khung_gio_chieu.id_lichchieu join phim on phim.id=lich_chieu.idphim 
            where ve.iduser=taikhoan.id";
             if($kyw!=""){
                $sql.=" and ve.id like '%".$kyw."%'";
            }
            $sql.=" order by ve.id desc;";
            $ve=pdo_query($sql);
           return $ve;
        }
        function ctve($id){
            $sql = "SELECT ve.id as'idve',taikhoan.user as'user',phim.name as'ten_phim',lich_chieu.ngay_chieu as'ngaychieu',khung_gio_chieu.gio_chieu as'gio',ve.ngaydat as ngay_dat,phong_chieu.ten_phong as'phong',ve.ghe as'ghe',ve.tongtien-bong_nuoc.gia as'giaghe',bong_nuoc.ten_combo as'combo',bong_nuoc.gia as'giacombo',ve.tongtien as'tongtien',ve.trangthai as'trangthai' from ve 
            join taikhoan on taikhoan.id=ve.iduser 
            join khung_gio_chieu on khung_gio_chieu.id=ve.idkhunggio 
            join bong_nuoc on bong_nuoc.id=ve.idcombo 
            join phong_chieu on phong_chieu.id=ve.idphong 
            join lich_chieu on lich_chieu.id=khung_gio_chieu.id_lichchieu 
            join phim on phim.id=lich_chieu.idphim 
            where ve.id=".$id." order by ve.id desc";
            $bill=pdo_query($sql);
           return $bill;
        }

?>