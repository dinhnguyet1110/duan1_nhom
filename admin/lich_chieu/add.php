
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">THÊM MỚI LỊCH CHIẾU</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">LỊCH CHIẾU</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md">
                        <form action="indexx.php?act=add_lichchieu" method="post">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <!-- <div class="form-group">
                                        <label for="hue-demo">ID phim </label>
                                        <input type="text" id="tengio" class="form-control demo" name="idphim">
                                    </div> -->
                                    <!-- <div class="form-group row">
                                        <label class="col-md-3 m-t-15">Phim</label><br>
                                        <div class="col-md-12">
                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="idphim">                                              
                                                                             
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="hue-demo">Phim</label>
                                        <input type="text"  class="form-control demo" name="idphim" value=<?php echo $id ?>>
                                    </div>
                                    <div class="form-group">
                                        <label for="hue-demo">Ngày chiếu</label>
                                        <input type="text" id="" class="form-control demo" name="ngaychieu" required="">
                                    </div>
                                    
                                    <!-- <div class="form-group">
                                        <label for="hue-demo">ID giờ</label>
                                        <input type="text" id="tengio" class="form-control demo" name="idgio">
                                    </div> -->
                                
                                </div>
                            </div>
                          
                            <input type="submit"  class="btn btn-success" name="themmoi" value="Thêm mới">
                            <input type="reset"  class="btn btn-primary" name="nhaplai" value="Nhập lại">
                            
                            <a href="indexx.php?act=list_lichchieu"><input type="button" class="btn btn-info" value="Danh sách" name="list_lichchieu"></a> 
                            <?php
                                if(isset($thongbao)&&($thongbao!="")){
                                    echo $thongbao;
                                }
                            ?>             
                        </form>
                    </div>
                </div>

            </div>
