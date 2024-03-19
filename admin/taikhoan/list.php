
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Bảng danh sách tài khoản</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Quản trị</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tài khoản</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Tên tài khoản</th>
                                <th>Mật khẩu</th>
                                <th>Vai trò</th>
                                <th>Thao tác</th>
                            </tr>
                            <?php
                                foreach($listtaikhoan as $tk){
                                    extract($tk);                                
                                    $xoatk="indexx.php?act=xoatk&id=".$id;
                                    echo '<tr>
                                        <td>'.$id.'</td>
                                        <td>'.$user.'</td>
                                        <td>'.$pass.'</td>
                                        <td>'.$vai_tro.'</td>
                                        <td></a>
                                        <a onclick="'."return confirm('Bạn có muốn xóa?')".'" href="'.$xoatk.'"><input type="button" value="Xóa" class="btn btn-danger btn-sm"></a></td>
                                    </tr>
                                    ';
                                }
                            ?>
                            </table>
                            
                        </div>
                        <p>* Vai trò:
                                1 : admin / 
                                0 : người dùng
                            </p>
                    </div>
                        
                    </div>
                </div>
            </div>
