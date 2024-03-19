<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">THÊM MỚI ẢNH MÔ TẢ</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ảnh mô tả</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <form action="indexx.php?act=add_anhmota" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                        
                                    <input type="hidden"name="id" value="<?php echo $id ?>">
                             

                            <div class="form-group">
                                <label for="hue-demo">Phim</label>
                                <?php foreach ($phims as $phim) : ?>
                                    <input type="text" class="form-control demo" value="<?php echo $phim['name'] ?>">
                                <?php endforeach ?>
                            </div>
                            <div class="form-group">
                                <label for="hue-demo">Thêm ảnh mô tả</label>
                                <input type="file" id="" class="form-control demo" name="anh_mota" required="">
                            </div>



                        </div>
                    </div>

                    <input type="submit" class="btn btn-success" name="them" value="Thêm ">


                    <a href="indexx.php?act=list_anhmota"><input type="button" class="btn btn-info" value="Danh sách" name="list_anhmota"></a>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </form>
            </div>
        </div>

    </div>