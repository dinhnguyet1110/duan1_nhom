
    <!-- ==========Preloader========== -->
    <?php 
         if(isset($thongbao) && ($thongbao != "")){
            echo ' <script>
            '.$thongbao.'
            </script>';
         }
            
    ?>
    
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
                        <span class="cate">Chào mừng</span>
                        <h2 class="title">đến NTN </h2>
                    </div>
                    <form class="account-form" action="?act=dangky" method="post">
                        <div class="form-group">
                            <label for="email1">Email<span>*</span></label>
                            <input type="email" placeholder="Nhập email của bạn" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="email1">Tên đăng nhập<span>*</span></label>
                            <input type="text" placeholder="Tên đăng nhập" name="user" required>
                        </div>
                        <div class="form-group">
                            <label for="pass">Mật khẩu<span>*</span></label>
                            <input type="password" placeholder="Mật khẩu" name="pass" required>
                        </div>
                        
                           
                            <input type="hidden" placeholder="Mật khẩu" name="role" value="0" required>
                        
                        <div class="form-group checkgroup">
                            <input type="checkbox" id="bal" required checked>
                            <label for="bal">Tôi đồng ý với <a href="#0">Điều khoản, Chính sách bảo mật</a> và <a href="#0">Phí</a></label>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" name="dangky" value="Đăng ký">
                        </div>
                    </form>
                    <div class="option">
                        Bạn đã có tài khoản ? <a href="?act=dangnhap">Đăng nhập</a>
                    </div>
                    <!-- <div class="or"><span>Hoặc</span></div>
                    <ul class="social-icons">
                        <li>
                            <a href="#0">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="active">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </section>
   
