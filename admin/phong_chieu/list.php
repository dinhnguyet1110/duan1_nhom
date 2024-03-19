
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Bảng danh sách phòng</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Quản trị</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Phòng</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                        <div class="col-12"> <div class="card-body">
                            <a href="indexx.php?act=add_phongchieu"><input type="button"class="btn btn-success" value="Nhập thêm"></a>
                            
                        </div>
                        <div class="card">
                            <table class="table">
                            <tr>
                              
                                <th>Mã phòng</th>
                                <th>Tên phòng</th>
                                <th>Thao tác</th>
                            </tr>
                            <?php
                                foreach($listphong as $phong){
                                    extract($phong);
                                    $suaphong="indexx.php?act=suaphong&id=".$id;
                                    $xoaphong="indexx.php?act=xoaphong&id=".$id;
                                    echo '<tr>
                                      
                                        <td>'.$id.'</td>
                                        <td>'.$ten_phong.'</td>
                                        <td><a href="'.$suaphong.'"><input type="button" class="btn btn-cyan btn-sm" value="Sửa"></a>
                                        <a onclick="'."return confirm('Bạn có muốn xóa?')".'" href="'.$xoaphong.'"><input type="button" value="Xóa" class="btn btn-danger btn-sm"></a></td>
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
