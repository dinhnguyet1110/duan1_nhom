<div class="page-wrapper">
    <div class="page-breadcrumb">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <form action="indexx.php?act=add_phim" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3 m-t-15">Thể loại phim</label><br>
                                <div class="col-md-9">
                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;"name="idtl">                                              
                                    <?php
                                        foreach($listtheloai as $theloai){
                                            extract($theloai);
                                            echo '<option value="'.$id.'">'.$nametl.'</option>';
                                        }
                                    ?>                                      
                                </select>
                                </div>
                            </div>
                            <div class="form-group m-t-20">
                                <label for="tenphim">Tên Phim</label>
                                <input type="text" id="tenphim" class="form-control demo" name="tenphim" required>
                            </div>
                            <div class="form-group">
                                <label for="motaphim">Mô Tả</label>
                                <textarea id="motaphim" class="form-control demo" name="motaphim" required></textarea>
                            </div>
                            <div class="form-group m-t-20">
                                <label for="thoiluong">Thời lượng</label>
                                <input type="text" id="thoiuong" class="form-control demo" name="thoiluong" required>
                            </div>
                            <div class="form-group m-t-20">
                                <label for="hinh">Avatar</label>
                                <input type="file" name="hinh">
                            </div>
                            <div class="form-group m-t-20">
                                <label for="hinh">Hình ảnh</label>
                                <input type="file" name="hinhanh">
                            </div>
                            <div class="form-group m-t-20">
                                <label for="tenphim">Ngày khởi chiếu </label>
                                <input type="text" id="ngaykchieu" class="form-control demo" name="ngaykchieu" required>
                            </div>
                            <div class="form-group m-t-20">
                                <label for="trailer">Trailer</label>
                                <input type="file" id="trailer" class="form-control demo" name="trailer" required>
                            </div>
                            <div class="form-group m-t-20">
                                <label for="trangthai">Trạng thái</label>
                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="trangthai">                                                                                
                                    <option value="0">Phim đang chiếu</option>         
                                    <option value="1">Phim sắp chiếu</option>                          
                                </select>
                            </div>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-success" name="themmoi" value="Thêm mới">
                    <input type="reset" class="btn btn-primary" name="nhaplai" value="Nhập lại">

                    <a href="indexx.php?act=list_phim">
                        <input type="button" class="btn btn-info" value="Danh sách" name="list_phim">
                    </a>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>