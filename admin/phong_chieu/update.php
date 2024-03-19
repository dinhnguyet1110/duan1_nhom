<?php
    if(is_array($phong)){
        extract($phong);
    }
?>
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Cập nhập </h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="indexx.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Phòng</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md">
                        <form action="indexx.php?act=update_phongchieu" method="post">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group m-t-20">
                                    <label for="hue-demo">Mã phòng</label>
                                    <input type="text" id="maphong" class="form-control demo" name="maphong"value="<?php if(isset($id)&&($id!="")) echo $id; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="hue-demo">Tên phòng</label>
                                        <input type="text"  class="form-control demo" name="ten_phong" value="<?php if(isset($ten_phong)&&($ten_phong!="")) echo $ten_phong; ?>">
                                    </div>

                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                            <input type="submit"  class="btn btn-success" name="capnhat" value="Cập nhật">
                            <input type="reset"  class="btn btn-primary" name="nhaplai" value="Nhập lại">
                            <a href="indexx.php?act=list_phongchieu"><button type="" class="btn btn-info">Danh sách</button></a>
                        </form>
                    </div>
                </div>

            </div>
