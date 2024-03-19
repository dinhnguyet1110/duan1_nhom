<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Bảng Thống kê</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Quản trị</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thống kê</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <table class="table">
                        <tr>
                           
                            <th>ID phim</th>
                            <th>Tên phim</th>
                            <th>Số vé bán</th>
                            <th>Doanh thu</th>
                          
                        </tr>
                        <?php if ($phimBanNhieuVe): ?>
                            <!-- Kiểm tra xem biến $phimBanNhieuVe có dữ liệu hay không. Nếu có, thực hiện vòng lặp, ngược lại, điều hướng đến else. -->
                            <?php foreach ($phimBanNhieuVe as $phim): ?>
                                <!-- Nếu có dữ liệu, sử dụng vòng lặp foreach để lặp qua mỗi phần tử trong mảng $phimBanNhieuVe. Mỗi phần tử sẽ được đặt vào biến $phim trong mỗi lần lặp. -->
                                <tr>
                                  
                                    <td><?php echo $phim['id']; ?></td>
                                    <td><?php echo $phim['name']; ?></td>
                                    <td><?php echo $phim['so_ve']; ?></td>
                                    <td><?php echo $phim['doanh_thu']; ?></td>
                                  
                                </tr>

                            <?php endforeach; ?>
                        <?php else: ?>
                            <!-- Nếu biến $phimBanNhieuVe không có dữ liệu, hiển thị thông báo "Không có dữ liệu." trong một hàng của bảng. -->
                            <tr>
                                <td colspan="6">Không có dữ liệu.</td>
                            </tr>
                        <?php endif; ?>
                         
                    
                        <!-- Kết thúc điều kiện if. -->
                    </table>
                    <h3>Tổng Doanh Thu:
                        <?php echo $phim['tong_doanh_thu_tat_ca_phim']; ?>
                    </h3>  <!-- Hiển thị giá trị tổng doanh thu -->
                </div>
            </div>
        </div>
        <div class="row mb10">
            <a href="indexx.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
        </div>
    </div>
</div>
