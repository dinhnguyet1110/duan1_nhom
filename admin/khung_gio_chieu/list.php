<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Bảng danh sách Khung Giờ</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Quản trị</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Khung giờ</li>
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
                            <a href="indexx.php?act=add_khunggio"><input type="button"class="btn btn-success" value="Nhập thêm"></a>
                        </div> -->
                        <div class="card">
                            <table class="table">
                            <tr>
                               
                                <th>Mã giờ</th>
                                <th>Giờ chiếu</th>         
                                <th>Ngày chiếu</th>
                                <th>Phòng chiếu</th>
                                <th>Thao tác</th>
                                <th style="display: none;">ID lịch chiếu</th>
                                <th style="display: none;">ID phòng</th>
                            </tr>
                            <?php
                                foreach($listkhunggio as $khunggio){
                                    extract($khunggio);
                                    $suakg="indexx.php?act=suakg&id=".$id;
                                    $xoakg="indexx.php?act=xoakg&id=".$id;
                                    echo '<tr>
                                      
                                        <td>'.$id.'</td>
                                        <td>'.$gio_chieu.'</td>
                                        <td>'.$ngay_chieu.'</td>
                                        <td>'.$ten_phong.'</td>
                                        <td><a href="'.$suakg.'"><input type="button" class="btn btn-cyan btn-sm" value="Sửa"></a>
                                        <a onclick="'."return confirm('Bạn có muốn xóa?')".'" href="'.$xoakg.'"><input type="button" value="Xóa" class="btn btn-danger btn-sm"></a></td>
                                        <td  style="display: none;">'.$id_lichchieu.'</td>
                                        <td style="display: none;">'.$id_phong.'</td>
                                    </tr>
                                    ';
                                }
                            ?>
                            </table>
                        </div>

                        
                    </div>
                        
                    </div>
                </div>
            </div>
