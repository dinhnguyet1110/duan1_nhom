<?php
function phim_ban_nhieu_ve_nhat_va_tong_doanh_thu(){
    $sql = "SELECT 
                phim.id, 
                phim.name, 
                COUNT(ve.id) AS so_ve, 
                SUM(ve.tongtien) AS doanh_thu,
                (SELECT SUM(ve.tongtien) 
                 FROM phim 
                 JOIN lich_chieu ON lich_chieu.idphim = phim.id
                 JOIN khung_gio_chieu ON khung_gio_chieu.id_lichchieu = lich_chieu.id
                 JOIN ve ON ve.idkhunggio = khung_gio_chieu.id
                 WHERE phim.status IN ('0', '1')
                ) AS tong_doanh_thu_tat_ca_phim
            FROM phim 
            JOIN lich_chieu ON lich_chieu.idphim = phim.id
            JOIN khung_gio_chieu ON khung_gio_chieu.id_lichchieu = lich_chieu.id
            JOIN ve ON ve.idkhunggio = khung_gio_chieu.id
            WHERE phim.status IN ('0', '1') 
            GROUP BY phim.id 
            ORDER BY so_ve DESC";
    return pdo_query($sql);
}

    
    
?>