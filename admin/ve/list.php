<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Bảng danh sách phim </h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Quản trị</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Đặt vé</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">           
                <div class="form-group row">
                    <h5 class="col-md-1 m-t-15">Mã vé</h5>
                        <form action="indexx.php?act=list_ve" method="post" class="col-sm-9">
                            <input class="col-sm-6" type="text" name="kyw" placeholder="Nhập mã vé">
                            <input type="submit" name="listok" value="Tìm kiếm"></a>
                        </form>
                </div>
                <div class="card">
                    <table class="table">
                        <tr>                     
                            <th>ID vé</th>                     
                            <th>Tên khách hàng</th>  
                            <th>Tên phim</th>
                            <th>Ngày chiếu</th>
                            <th>Giờ chiếu</th>
                            <th>Ngày đặt</th>
                            <th>Phòng</th>
                            <th>Vị trí ghế</th>
                            <th>Giá ghế</th>
                            <th>Combo bỏng nước</th>   
                            <th>Giá combo bỏng nước</th>                          
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                          
                        </tr>
                        <?php foreach($ve as $ve1) : ?>
                            <?php extract($ve1) ?>
                            <tr>           
                            <td><?= $id?></td>                     
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
                      
                            </tr>  
                        <?php endforeach ?>                            
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
