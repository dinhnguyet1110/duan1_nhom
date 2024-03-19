<!-- ==========Header-Section========== -->

    <!-- ==========Banner-Section========== -->
    <?php extract($ctphim) ?>
    <section class="details-banner bg_img" data-background="admin/upload/<?php echo $avatar ?>">
   
    <div class="container">
   
            <div class="details-banner-wrapper">
                <div class="details-banner-thumb">
                    <img src="admin/upload/<?php echo $avatar ?>" alt="movie">                    
                    <a href="admin/upload/video/<?php echo $traller ?>" class="video-popup">
                        <img src="user/assets/images/movie/video-button.png" alt="movie">
                    </a>
                </div>
                <div class="details-banner-content offset-lg-3">
                    <h3 class="title"><?php echo $name ?></h3>               <!-- tên phim-->   
                    <a href="#0" class="button">Thể loại: <?php echo $nametl ?></a>   <!-- thể loại-->
                    
                    <div class="social-and-duration">
                        <div class="duration-area">
                        
                            <div class="item">
                                <i class="fas fa-calendar-alt"></i><span>Ngày khởi chiếu: <?php echo $ngaychieu ?></span><br> 
                                <i class="far fa-clock"></i><span>Thời lượng: <?php echo $thoi_luong ?> mins</span> 
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>

        </div>
      
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Book-Section========== -->
    <style>
        .ml-20 {
            margin-left: 20px;
            float: left;
        }

        .ml-30 {
            margin-left: 33px;
        }

        .box {
            width: 90px;
            height: 30px;
            background: #3366FF;
            color: Silver;
            border: 1px solid black;
            text-align: center;
            border-radius: 3px;
        }

        .box.selected-date {
            background-color: red;
            color: white;
        }

        .mb-30 {
            margin-bottom: 30px;
        }
        .box1 {
            width: 90px;
            height: 30px;
            background: red;
            color: Silver;
            border: 1px solid black;
            text-align: center;
            border-radius: 3px;
        }
    </style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var boxes = document.querySelectorAll('.box');

        boxes.forEach(function (box) {
            box.addEventListener('click', function () {
                // Xóa tất cả lớp 'selected-date' trước khi thêm vào ngày mới
                boxes.forEach(function (otherBox) {
                    otherBox.classList.remove('selected-date');
                });

                // Thêm lớp 'selected-date' cho ngày được chọn
                this.classList.add('selected-date');

                // Lưu ID của ngày được chọn vào sessionStorage
                sessionStorage.setItem('selectedDateId', this.id);
            });
        });

        // Kiểm tra xem đã có ngày được chọn trước đó hay không
        var selectedDateId = sessionStorage.getItem('selectedDateId');
        if (selectedDateId) {
            // Thêm lớp 'selected-date' cho ngày được chọn trước đó
            var selectedDate = document.getElementById(selectedDateId);
            if (selectedDate) {
                selectedDate.classList.add('selected-date');
            }
        }
    });
</script>

</head>
<body>

<!-- Các phần khác của trang web -->

<section class="page-title bg-one">
    <div class="container">
        <div class="page-title-area">
            <div class="item md-order-1">
                <a href="#" class="custom-button back-button">
                    <i class="flaticon-double-right-arrows-angles"></i>
                </a>
            </div>

            <div class="top-side">
            <div class="tab-item date-item mb-30">
                    <h6>Ngày chiếu: </h6>
                    <?php
                    $link = 'index.php?act=ctphim&id=' . $_GET['id'] . '&idngay=';
                    foreach ($ngay as $day) {
                        extract($day);
                        $today = date("Y-m-d");            
                        if (strtotime($today) > strtotime($ngay_chieu)) {
                        echo "";
                        } else {
                            echo '<a class="ml-20 box" id="ngay_' . $id . '" href="' . $link . $id . '">' . $ngay_chieu . '</a><br>';
                        }
                        // echo '<a class="ml-20 box" id="ngay_' . $id . '" href="' . $link . $id . '">' . $ngay_chieu . '</a><br>';
                    }
                    
                    ?>
                </div>
                <div class="tab-item date-item">
                <h6>Giờ chiếu: </h6>
                    <?php
                    if (isset($_GET['idngay'])) {
                        $id = $_GET['idngay'];
                        $gio = load_gio($id);
                        foreach ($gio as $time) {
                            extract($time);
                            echo '<a class="ml-20 box1" href="">' . $gio_chieu . '</a>';
                        }
                    } else {
                        $id_phong = "";
                    }
                    ?>
                </div>
            </div>
            <div class="item date-item"> 
            <?php
                if (isset($_SESSION['user']) && isset($_GET['idngay'])) {
                    $sql="SELECT khung_gio_chieu.id as'idkhunggio' from khung_gio_chieu where id_lichchieu=".$_GET['idngay'];
                    $idkhunggio=pdo_query_one($sql);
                    extract($idkhunggio);
                    echo '<a class="custom-button" href="index.php?act=phong&idkhunggio='.$idkhunggio.'">Đặt vé</a>';
                } else {
                    echo '<a class="custom-button" href="index.php?act=dangnhap">Đặt vé</a>';
                }
                ?>         
            </div>
        </div>
    </div>
</section>
    <section class="movie-details-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center flex-wrap-reverse mb--50">
                
                <div class="col-lg-9 mb-50">
                    <div class="movie-details">
                        <h3 class="title">Hình Ảnh</h3>
                        <div class="details-photos owl-carousel"> 
                            <?php foreach($anhmota as $anh) :?> 
                                <?php extract($anh)?>               
                            <div class="thumb">
                                <a href="admin/upload/<?php echo $name ?>" class="img-pop">
                                <img src="admin/upload/<?php echo $name?>" alt="movie">    
                                </a> 
                            </div>      
                            <?php endforeach ?>                                        
                        </div>
                        <div class="tab summery-review">
                            <ul class="tab-menu">
                                <li class="active">
                                    MÔ TẢ
                                </li>
                                <li>
                                   Bình luận 
                                </li>
                            </ul>
                            <div class="tab-area">
                                    <div class="tab-item active">
                                        <div class="item">
                                            <h5 class="sub-title"></h5>
                                        </div>
                                    <div>                      
                                        <?php echo $mota ?>        
                            </div>
                        </div>
                        <div class="tab-item">
                                <div class="movie-review-item">
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                                <script>    
                                    $(document).ready(function(){
                                    $("#binhluan").load("user/view/binhluan/binhluanform.php", {idphim: <?=$_GET['id']?>});
                                    });
                                </script>
                                <div class="row" id="binhluan"></div>  
                                </div>
                                                                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
