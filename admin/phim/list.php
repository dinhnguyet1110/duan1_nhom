<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Bảng danh sách phim </h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Quản trị</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Phim</li>
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
                    <h5 class="col-md-1 m-t-15">Thể loại</h5>
                        <form action="indexx.php?act=list_phim" method="post" class="col-sm-9">
                            <input class="col-sm-6" type="text" name="kyw">
                            <select class="select2 form-control custom-select col-sm-3" name="idtl">
                                <option value="0" selected>Tất cả</option>
                                    <?php
                                        foreach($listtheloai as $theloai){
                                            extract($theloai);
                                            echo '<option value="'.$id.'">'.$nametl.'</option>';
                                        }
                                    ?>
                                </select>
                            <input type="submit" name="listok" value="Go"></a>
                        </form>
                </div>
                <div class="card-body">
                    <a href="indexx.php?act=add_phim"><input type="button" class="btn btn-success" value="Nhập thêm"></a>
                </div>
                <div class="card">
                    <table class="table">
                        <tr>
                          
                            <th>ID</th>
                            <th>Tên phim</th>
                            <th>Mô tả</th>
                            <th>Thời lượng</th>
                            <th>Avatar</th>
                            <th>Ngày khởi chiếu</th>
                            <th>Trailer</th>
                            <!-- <th>Trạng thái</th> -->
                            <th>Lịch chiếu</th>
                            <th>Thêm ảnh mô tả</th>
                            <th>Thao tác</th>
                        </tr>
                        <?php
                        foreach ($listphim as $phim) {
                            extract($phim);
                            $suatl = "indexx.php?act=suaphim&id=" . $id;
                            $xoatl = "indexx.php?act=xoaphim&id=" . $id;
                            $tao_lich = "indexx.php?act=taolich&id=" . $id;
                            $them_anhmota = "indexx.php?act=taoanhmota&id=" . $id;

                            // Khai báo biến $avatar với giá trị mặc định để tránh lỗi undefined
                            $avatar = isset($avatar) ? $avatar : '';
                            
                            $hinhpath = "../admin/upload/" . $avatar;

                            if (is_file($hinhpath)) {
                                $hinh = "<img src='" . $hinhpath . "' height='80'>";
                            } else {
                                $hinh = "Không có hình";
                            }
                             // Khai báo biến $traller với giá trị mặc định để tránh lỗi undefined
                            $trailer= isset($traller) ? $traller : '';
                            
                            $video = "../admin/upload/video/" . $traller;

                            if (is_file($video)) {
                                $trailer = $video;
                            } else {
                                $trailer = "Không có hình";
                            }

                            echo '<tr>
                               
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>' . $mota . '</td>
                                <td>' . $thoi_luong . '</td>
                                <td>' . $hinh . '</td>
                                <td>' . $ngaychieu . '</td>
                                <td>' . $traller . '</td>
                               
                                <td><a href="'.$tao_lich.'"><input type="button" class="btn btn-cyan btn-sm" value="Tạo lịch chiếu" ></a></td>
                                <td><a href="'.$them_anhmota.'"><input type="button" class="btn btn-cyan btn-sm" value="Thêm ảnh" ></a></td>

                                <td><a href="'.$suatl.'"><input type="button" class="btn btn-cyan btn-sm" value="Sửa" ></a>
                                <a onclick="'."return confirm('Bạn có muốn xóa?')".'" href="'.$xoatl.'"><input type="button" value="Xóa" class="btn btn-danger btn-sm"></a>                              
                                </td>                     
                                </tr>';
                        }
                        ?>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
