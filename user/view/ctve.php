<style>
        .mb{
            margin-bottom:30px;
        }
    </style>
    <div   class="movie-facility padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    
                                        </div>                         
                          
                        </div>
                    </div>
                </div>
               
                <div style="margin-left:700px; margin-bottom: 50px;" class="col-lg-4">
                <div  class="booking-summery bg-one">
                            <h4 class="title">Chi tiết vé</h4>
                            <?php foreach( $ve  as $p):?>
                                <?php extract($p)?>                     
                                     
                                        <div class="ngang">
                                            <span>Tên phim:</span><input  type="text" value="<?= $ten_phim?>" readonly>
                                        </div>
                                        <div class="ngang">
                                            <span>Ngày chiếu:</span><input type="text" value="<?= $ngaychieu?>" readonly>
                                        </div>
                                        <div class="ngang">
                                            <span>Giờ chiếu:</span><input type="text"value="<?= $gio?>" readonly>
                                        </div>
                                        <div class="ngang">
                                            <span>Phòng chiếu:</span><input type="text"value="<?= $phong?>" readonly>
                                        </div>
                                        <div class="ngang">
                                            <span>Giờ đặt/Ngày đặt:</span><input type="text"value="<?= $ngay_dat?>" readonly>
                                        </div>
                                        <div class="ngang">
                                            <span>Vị trí ghế:</span><input type="text" name="ghe" value="<?= $ghe?>" readonly>
                                        </div>
                                        <div class="ngang">
                                            <span>Giá vé</span><input type="text"value="<?= $giaghe?>" readonly>
                                        </div>  
                                        <div class="ngang">
                                            <span>Combo đi kèm</span><input type="text" name="combo"  value="<?php echo $combo ?>" readonly>
                                        </div>                                        
                                        <div class="ngang">
                                            <span>Giá combo</span><input type="text" name="gia"value=" <?php echo $giacombo ?>" readonly>
                                        </div>
                                        <div class="ngang">
                                          <input type="hidden" name="idcombo"value=" <?php echo $idcombo ?>" readonly>
                                        </div>
                                        <div class="ngang">
                                            <span>Tổng tiền:</span><input type="text" name="tongtien"value=" <?php echo $tongtien  ?>" readonly>
                                        </div>
                                        <div class="ngang">
                                            <span>Trạng thái</span><input type="text" name="gia"value=" <?php echo $trangthai ?>" readonly>
                                        </div>                                     
                                        <?php endforeach ?> 
                               
                    </div>
                            
                </div>
            </div>
        </div>
    </div>