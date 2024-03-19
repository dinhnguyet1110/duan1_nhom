<style>
        .mt{
            margin-top:50px;
        }
    </style>
    <div class="movie-facility padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="checkout-widget checkout-contact">
                        <h5 class="title mt">Lịch sử đặt vé </h5>
                        <div class="card">
                            <table class="table">
                            <tr>                            
                                <th>Tên khách hàng</th>
                                <th>Tên phim</th>
                                <th>Ngày chiếu</th>
                                <th>Giờ chiếu</th>
                                <th>Ngày đặt</th>
                                <th>Phòng</th>
                                <th>Vị trí ghế</th>
                                <th>Giá ghế</th>
                                <th>Combo đi kèm</th>   
                                <th>Giá combo </th>                            
                                <th>Tổng tiền</th>
                                <th>Thanh toán</th>
                                <th>Chi tiết vé</th>
                            </tr>
                            <?php foreach( $loadbill  as $p):?>
                                <?php extract($p)?>
                            <tr> 
                            <td><?= $user?></td>
                            <td><?= $ten_phim?></td>
                            <td><?=$ngaychieu?></td>
                            <td><?=$gio?></td>
                            <td><?=$ngay_dat?></td>
                            <td><?=$phong?></td>
                            <td><?=$ghe?></td>
                            <td><?=$giaghe?></td>
                            <td><?=$combo?></td>
                            <td><?=$giacombo?></td>
                            <td><?=$tongtien?></td>
                            <td><?=$trangthai?></td>
                            <td> <a href="index.php?act=ctve&id=<?=  $idve ?>">Xem chi tiết</a></td>

                            </tr>
                            <?php endforeach ?>                   
                            </table>
                            
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>