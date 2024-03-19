<?php
    if(is_array($lich)){
        extract($lich);
    }
?>
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Cập nhật lịch chiếu</h4>
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
                        <form action="indexx.php?act=update_lichchieu" method="post">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <div class="form-group">
                                        <label for="hue-demo">ID lịch chiếu</label>
                                        <input type="text" id="tengio" class="form-control demo" name="ngaychieu"  value="">
                                    </div> -->
                                    <div class="form-group">
                                        <label for="hue-demo">Phim</label>
                                        <input type="text"  class="form-control demo" name="idphim" value=<?php echo $id ?>>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="hue-demo">Ngày chiếu</label>
                                        <input type="text" id="" class="form-control demo" name="ngaychieu"  value="<?=$ngay_chieu?>">
                                    </div>

                                    <div class="form-group m-t-20">
                                        <label for="trangthai">Trạng thái</label>
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="trangthai" value="<?=$status?>">                                                                                
                                            <option value="0">Phim đang chiếu</option>         
                                            <option value="1">Phim sắp chiếu</option>                          
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                            <input type="submit"  class="btn btn-success" name="capnhat" value="Cập nhật">
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
