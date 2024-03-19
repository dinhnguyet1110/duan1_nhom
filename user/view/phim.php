<!-- ==========Header-Section========== -->

    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="banner-bg bg_img bg-fixed" data-background="assets/images/banner/banner01.jpg"></div>
        <div class="container">
            <div class="banner-content">
                <h1 class="title  cd-headline clip"><span class="d-block">Đặt vé</span> cho 
                    <span class="color-theme cd-words-wrapper p-0 m-0">
                        <b class="is-visible">Phim</b>
                        <b>Sự kiện</b>                      
                    </span>
                </h1>
                <p>Bán vé an toàn, bảo mật, đáng tin cậy. Tấm vé xem giải trí trực tiếp của bạn. </p>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Ticket-Search========== -->
    <section class="search-ticket-section padding-top pt-lg-0">
        <div class="container">
            <div class="search-tab bg_img" data-background="assets/images/ticket/ticket-bg01.jpg">
                <div class="row align-items-center mb--20">
                    <div class="col-lg-6 mb-20">
                        <div class="search-ticket-header">
                            <h6 class="category">NTN Ceminas xin chào bạn </h6>
                            <h3 class="title">Nhập phim bạn muốn tìm kiếm</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-20">
                        
                    </div>
                </div>
                <div class="tab-area">
                    <div class="tab-item active">
                        <form class="ticket-search-form" method="post" action="index.php?act=phim" >
                            <div class="form-group large">
                                <input type="text" placeholder="Tìm kiếm phim" name="kyw">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>                         
                            
                        </form>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>    
    <!-- ==========Ticket-Search========== -->

    <!-- ==========Movie-Section========== -->
    <section class="movie-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header-2">
                    <div class="left">
                        <h2 class="title">Thể loại phim: <?=$tentl ?></h2>
                        <p>Những bộ phim hot khiến cho bạn không thể bỏ lỡ </p>
                    </div>
                    
                </div>
            <div class="tab row">  
                <?php foreach($dsphim as $phim) : ?>
                <?php extract($phim) ?>                         
                    <!-- <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">  -->
                            <div class="item">                          
                                <div class="movie-grid">                                                              
                                    <div class="movie-thumb c-thumb">
                                        <a href="index.php?act=ctphim&id=<?php echo $id ?>">
                                           <img src="admin/upload/<?php echo $avatar ?>" alt="movie" >
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">                                      
                                        <a href="index.php?act=ctphim&id=<?php echo $id ?>"><?php echo $name ?></a>                                         
                                            </h5>
                                            
                                    </div>                                   
                                </div>                                   
                            </div>                         
                        <!-- </div>
                    </div> --> 
                <?php endforeach ?>
            </div>
        </div>
    </section>