
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Bảng danh sách bình luận</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Quản trị</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Bình luận</li>
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
                            <a href="indexx.php?act=list_binhluan"><input type="button"class="btn btn-success" value="Nhập thêm"></a>
                            </div> -->
                        <div class="card">
                            <table class="table">
                                <tr>
                                
                                    <th>ID</th>
                                    <th>Nội dung</th>
                                    <th>Người bình luận</th>
                                    <th>Idphim</th>
                                    <th>Ngày bình luận</th>
                                    <th>Xóa</th>
                                </tr>
                                        <?php
                                    foreach($listbinhluan as $binhluan){
                                        extract($binhluan);
                                        $xoabl="indexx.php?act=xoabl&id=".$id;
                                        echo '<tr>
                                    
                                        <td>'.$id.'</td>
                                        <td>'.$noidung.'</td>
                                        <td>'.$user.'</td>
                                        <td>'.$idphim.'</td>
                                        <td>'.$ngaybinhluan.'</td>
                                        <td><a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
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
