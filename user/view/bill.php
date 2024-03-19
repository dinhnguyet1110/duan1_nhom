<style>
    .mb {
        margin-bottom: 30px;
    }
</style>
<div class="movie-facility padding-bottom padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="checkout-widget checkout-contact">
                    <h5 class="title">Thông tin liên hệ </h5>
                    <form class="checkout-contact-form">
                        <div class="form-group">
                            <input type="text" placeholder="Họ tên của bạn" value="Người dùng:<?php echo " " ?><?= $_SESSION['user']['user'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Email của bạn" value="Email:<?php echo " " ?><?= $_SESSION['user']['email'] ?>">
                        </div>
                    </form>
                </div>

                <div class="checkout-widget checkout-card mb-0">
                    <h5 class="title mb">Combo bỏng nước</h5>
                    <div class="tab row">
                        <?php foreach ($listbongnuoc as $bongnuoc) : ?>
                            <?php extract($bongnuoc) ?>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="<?php echo $id ?>">
                                            <img src="../admin/upload/<?php echo $hinh_anh ?>" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title">
                                            <a href=""><?php echo $ten_combo ?></a>
                                        </h5>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title">
                                            <?php echo $gia ?>
                                        </h5>
                                    </div>
                                    <a class="custom-button" href="index.php?act=datve&idcombo=<?= $id ?>">Chọn</a>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <?php

            if (isset($_GET['idcombo'])) {
                $sql = "select * from bong_nuoc where id=" . $_GET['idcombo'];
                $combo = pdo_query_one($sql);
                $idcombo = $combo['id'];
                $giaa = $combo['gia'];
                $tenn = $combo['ten_combo'];
            } else {
                $giaa = 0;
                $tenn = "Chưa chọn";
            }
            $sql = "SELECT ve.id,phim.name as'tenphim',lich_chieu.ngay_chieu,khung_gio_chieu.gio_chieu,phong_chieu.ten_phong,ve.ngaydat,ve.ghe,ve.tongtien as'giaghe' from ve 
                join khung_gio_chieu on ve.idkhunggio=khung_gio_chieu.id 
                join lich_chieu on lich_chieu.id=khung_gio_chieu.id_lichchieu 
                join phim on phim.id=lich_chieu.idphim 
                join phong_chieu on phong_chieu.id=ve.idphong WHERE ve.iduser=" . $_SESSION['user']['id'] . " ORDER by ve.id desc limit 1";
            $bill = pdo_query($sql);
            foreach ($bill as $ve) {
            }
            extract($ve);
            ?>
            <div class="col-lg-4">
                <div class="booking-summery bg-one">
                    <h4 class="title">Vé</h4>
                    <form action="index.php?act=uplai" method="post">
                        <div class="ngang">
                            <input name="id" type="hidden" value="<?= $id ?>">
                        </div>
                        <div class="ngang">
                            <span>Tên phim:</span><input type="text" value="<?= $tenphim ?>" readonly>
                        </div>
                        <div class="ngang">
                            <span>Ngày chiếu:</span><input type="text" value="<?= $ngay_chieu ?>" readonly>
                        </div>
                        <div class="ngang">
                            <span>Giờ chiếu:</span><input type="text" value="<?= $gio_chieu ?>" readonly>
                        </div>
                        <div class="ngang">
                            <span>Phòng chiếu:</span><input type="text" value="<?= $ten_phong ?>" readonly>
                        </div>
                        <div class="ngang">
                            <span>Giờ đặt/Ngày đặt:</span><input type="text" value="<?= $ngaydat ?>" readonly>
                        </div>
                        <div class="ngang">
                            <span>Vị trí ghế:</span><input type="text" name="ghe" value="<?= $ghe ?>" readonly>
                        </div>
                        <div class="ngang">
                            <span>Giá vé:</span><input type="text" value="<?= $giaghe ?>" readonly>
                        </div>
                        <div class="ngang">
                            <span>Bỏng+Nước</span><input type="text" name="combo" value="<?php echo $tenn ?>" readonly>
                        </div>
                        <div class="ngang">
                            <span>Giá bỏng nước:</span><input type="text" name="gia" value=" <?php echo $giaa ?>" readonly>
                        </div>
                        <div class="ngang">
                            <input type="hidden" name="idcombo" value=" <?php echo $idcombo ?>" readonly>
                        </div>
                        <div class="ngang">
                            <span>Tổng tiền:</span><input type="text" name="tongtien" value=" <?php echo $giaa + $giaghe  ?>" readonly>
                        </div>
                        <a href="?act=uplai"> <input style="border:none;margin-top:10px;border-radius: 25px;padding: 11px 24px;font-weight: 600;color: #ffffff;text-transform: uppercase;background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);" type="submit" name="thanhtoan" value="Thanh toán"></a>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>