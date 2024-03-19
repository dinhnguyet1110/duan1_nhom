<?php echo $thongbao ?? ''?>
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Bảng danh sách ảnh mô tả</h4><br>

                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Quản trị</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lịch chiếu</li>
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
                            <a href="indexx.php?act=add_lichchieu"><input type="button"class="btn btn-success" value="Nhập thêm"></a>
                            
                        </div> -->

                <div class="card">

                    <table class="table">
                        <tr>

                            <th>ID</th>
                            <th>Ảnh</th>
                            <th>Phim</th>
                            <th>ID PHIM</th>
                            <th>Thao tác</th>
                        </tr>
                        <?php
                        foreach ($anhmotas as $anhmota) {
                            extract($anhmota);
                            $xoalich = "indexx.php?act=xoaanhmota&id=" . $id;
                            echo '<tr>
                                       
                                        <td>' . $id . '</td>
                                        <td>
                                       <img src="../admin/upload/' . $name2 . '" width="80px">
                                        </td>
                                        <td>' . $idphim . '</td>
                                        <td>' . $name1 . '</td>                   
                               
                                      
                                       <td>
                                        <a onclick="' . "return confirm('Bạn có muốn xóa?')" . '" href="' . $xoalich . '"><input type="button" value="Xóa" class="btn btn-danger btn-sm"></a></td>
                                        </td>
                                    ';
                        }
                        ?>
                    </table>


                </div>

            </div>

        </div>
    </div>
</div>