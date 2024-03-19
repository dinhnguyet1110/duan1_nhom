<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Bảng danh sách phim </h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Quản trị</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Combo bỏng nước</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                
                <!-- <div class="card-body">
                    <a href="index.php?act=add_phim"><input type="button" class="btn btn-success" value="Nhập thêm"></a>
                </div> -->
                <div class="card">
                    <table class="table">
                    <tr>
                        <td>ID</td> 
                        <td>Tên combo</td> 
                        <td>Hình ảnh</td> 
                        <td>Giá</td> 

                    </tr>
                    <?php
                    foreach($listbongnuoc as $row)
                    {
                    ?>
                        <tr>
                            <td> <?= $row['id'] ?></td>
                            <td> <?= $row['ten_combo'] ?></td>
                            <td> <img src="../admin/upload/<?= $row['hinh_anh'] ?>" style='width:100px'></td>
                            <td> <?= $row['gia'] ?></td>

                        </tr>
                        
                    <?php
                        }
                    ?>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
