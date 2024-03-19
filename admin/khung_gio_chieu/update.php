<?php
    if(is_array($kg)){
        extract($kg);
    }
?>
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Cập nhật khung giờ</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Khung giờ</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md">
                        <form action="indexx.php?act=update_khunggio" method="post">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <div class="form-group m-t-20">
                                        <label for="hue-demo">ID khung giờ chiếu</label>
                                        <input type="text" id="magio" class="form-control demo" name="magio" value="<?php if(isset($id)&&($id!="")) echo $id; ?>" disabled>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="hue-demo">Giờ chiếu</label>
                                        <input type="text"  class="form-control demo" name="giochieu" value="<?php if(isset($gio_chieu)&&($gio_chieu!="")) echo $gio_chieu; ?>">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 m-t-15">ID lịch chiếu</label><br>
                                        <input type="text" id="tengio" class="form-control demo" name="id_lichchieu"  value="<?=$id_lichchieu?>">
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 m-t-15">ID phòng</label><br>
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="id_phong">                                       
                                            <?php
                                                foreach($listphong as $phong){                                 
                                                    if($id_phong==$phong['id']){
                                                    echo '<option value="'.$phong['id'].'" selected>'.$phong['id'].'</option>';
                                                    }else{
                                                        echo '<option value="'.$phong['id'].'">'.$phong['id'].'</option>';
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                            <input type="submit"  class="btn btn-success" name="capnhat" value="Cập nhật">
                            <input type="reset"  class="btn btn-primary" name="nhaplai" value="Nhập lại">
                            <a href="indexx.php?act=list_khunggio"><button type="" class="btn btn-info">Danh sách</button></a>
                        </form>
                    </div>
                </div>

            </div>
