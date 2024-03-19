
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">THÊM MỚI Khung Giờ Chiếu</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Khung Giờ</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md">
                        <form action="indexx.php?act=add_khunggio" method="post">
                            <div class="card">
                                <div class="card-body">                              
                                        
                                        <div class="form-group">
                                            <label for="hue-demo">Giờ chiếu</label>
                                            <input type="text" id="giochieu" class="form-control demo" name="giochieu">
                                        </div>
                                        <div class="form-group">
                                            <label for="hue-demo">ID lịch chiếu</label>
                                            <input type="text"  class="form-control demo" name="id_lichchieu" value=<?php echo $id ?>>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 m-t-15">ID phòng</label><br>
                                            <div class="col-md-12">
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="id_phong">                                              
                                                    <?php
                                                        foreach($listphong as $phong){
                                                            extract($phong);
                                                            echo '<option value="'.$id.'">'.$ten_phong.'</option>';
                                                        }
                                                    ?>                             
                                                </select>
                                            </div>
                                        </div>
                                
                                </div>
                            </div>
                          
                            <input type="submit"  class="btn btn-success" name="themmoi" value="Thêm mới">
                            <input type="reset"  class="btn btn-primary" name="nhaplai" value="Nhập lại">
                            
                            <a href="indexx.php?act=list_khunggio"><input type="button" class="btn btn-info" value="Danh sách" name="list_khunggio"></a>              
                        </form>
                    </div>
                </div>

            </div>
