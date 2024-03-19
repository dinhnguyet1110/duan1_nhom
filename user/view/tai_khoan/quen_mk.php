

    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    
    <!-- ==========Sign-In-Section========== -->
    <section class="account-section bg_img" data-background="assets/images/account/account-bg.jpg">
        <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">
                    <div class="section-header-3">
                        <h2 class="title">Quên mật khẩu</h2>
                    </div>
                    <form class="account-form" action="index.php?act=quen_mk" method="post">
                        <div class="form-group">
                            <label for="email1">Email<span>*</span></label>
                            <input type="email" placeholder="Nhập email của bạn" name="email">
                        </div>
                    
                        <div class="form-group text-center">
                            <input type="submit" name="guiemail" value="Gửi">
                          
                        </div>
                    </form>
                    <?php
                        if(isset($thongbao1) && $thongbao1!=""){
                            echo $thongbao1;
                        }
                    ?>

                </div>
               
            </div>
        </div>
    </section>
   
