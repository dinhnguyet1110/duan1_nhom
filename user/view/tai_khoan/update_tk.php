
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
                       
                        <h2 class="title">Cập nhật tài khoản </h2>
                    </div>
                    <?php
                        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                            extract($_SESSION['user']);
                        }
                       
                    ?>
                    <form class="account-form" action="index.php?act=update_tk" method="post">
                        <div class="form-group">
                            <label for="email1">Email<span>*</span></label>
                            <input type="email" name="email" value="<?=$email?>">
                        </div>
                        <div class="form-group">
                            <label for="email1">Tên đăng nhập<span>*</span></label>
                            <input type="text"  name="user" value="<?=$user?>">
                        </div>
                        <div class="form-group">
                            <label for="pass">Mật khẩu<span>*</span></label>
                            <input type="password"  name="pass" value="<?=$pass?>">
                        </div>
                        <div class="form-group">
                            <label for="dia_chi">Địa chỉ<span>*</span></label>
                            <input type="text" name="dia_chi" value="<?=$dia_chi?>">
                        </div>
                        <div class="form-group">
                            <label for="sdt">Số điện thoại<span>*</span></label>
                            <input type="sdt" name="sdt" value="<?=$sdt?>">
                        </div>
                           
                            <input type="hidden" placeholder="Quyền" name="role" value="0" >
                        
                        
                        <div class="form-group text-center">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="submit" name="capnhat" value="Cập nhật">
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
   
