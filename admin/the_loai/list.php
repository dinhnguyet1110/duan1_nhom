
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Bảng danh sách thể loại</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Quản trị</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Thể loại</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                        <div class="col-12"> <div class="card-body">
                            <a href="indexx.php?act=add_theloai"><input type="button"class="btn btn-success" value="Nhập thêm"></a>
                            
                        </div>
                        <div class="card">
                            <table class="table">
                            <tr>
                               
                                <th>Mã loại</th>
                                <th>Tên thể loại</th>
                                <th>Thao tác</th>
                            </tr>
                            <?php
                                foreach($listtheloai as $theloai){
                                    extract($theloai);
                                    $suatl="indexx.php?act=suatl&id=".$id;
                                    $xoatl="indexx.php?act=xoatl&id=".$id;
                                    echo '<tr>
                                     
                                        <td>'.$id.'</td>
                                        <td>'.$nametl.'</td>
                                        <td><a href="'.$suatl.'"><input type="button" class="btn btn-cyan btn-sm" value="Sửa"></a>
                                        <a onclick="'."return confirm('Bạn có muốn xóa?')".'" href="'.$xoatl.'"><input type="button" value="Xóa" class="btn btn-danger btn-sm"></a></td>
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
