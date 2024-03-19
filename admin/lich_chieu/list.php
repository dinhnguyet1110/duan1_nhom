<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Bảng danh sách Lịch chiếu</h4>
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
                             
                                <th>ID lịch chiếu</th>
                                <th>Ngày chiếu</th>
                                <th> Phim</th>                          
                                <!-- <th>Trạng thái</th> -->
                                <th>Khung giờ</th>
                                <th>Thao tác</th>
                                <th style=" display: none;">ID phim</th>
                            </tr>                                                             
                            <?php
                                foreach($listlichchieu as $lichchieu){
                                    extract($lichchieu);   
                                    $sualich="indexx.php?act=sualich&id=".$id;                              
                                    $xoalich="indexx.php?act=xoalich&id=".$id;
                                    $tao_gio = "indexx.php?act=tao_gio&id=" . $id;
                                    echo '<tr>
                                       
                                        <td>'.$id.'</td>
                                        <td>'.$ngay_chieu.'</td>
                                        <td>'.$name.'</td>                   
                               
                                        <td><a href="'.$tao_gio.'"><input type="button" class="btn btn-cyan btn-sm" value="Tạo giờ chiếu" ></a></td>
                                        <td><a href="'.$sualich.'"><input type="button" class="btn btn-cyan btn-sm" value="Sửa" ></a>
                                        <a onclick="'."return confirm('Bạn có muốn xóa?')".'" href="'.$xoalich.'"><input type="button" value="Xóa" class="btn btn-danger btn-sm"></a></td>
                                        <td style="display: none;">'.$idphim.'</td>
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
