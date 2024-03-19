
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">THÊM MỚI THỂ LOẠI PHIM</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Thể loại</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md">
                        <form action="indexx.php?act=add_theloai" method="post">
                            <div class="card">
                                <div class="card-body">
                                
                                        <div class="form-group m-t-20">
                                            <label for="hue-demo">Mã thể loại</label>
                                            <input type="text" id="maloai" class="form-control demo" name="maloai" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="hue-demo">Tên loại</label>
                                            <input type="text" id="tenloai" class="form-control demo" name="tenloai" required="">
                                        </div>                            
                                </div>
                            </div>
                          
                            <input type="submit"  class="btn btn-success" name="themmoi" value="Thêm mới">
                            <input type="reset"  class="btn btn-primary" name="nhaplai" value="Nhập lại">
                            
                            <a href="indexx.php?act=list_theloai"><input type="button" class="btn btn-info" value="Danh sách" name="list_theloai"></a>              
                        </form>
                    </div>
                </div>

            </div>
