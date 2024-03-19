<!-- Thêm thư viện Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
// Lấy dữ liệu từ PHP
$phimData = phim_ban_nhieu_ve_nhat_va_tong_doanh_thu();
?>

<!-- Vẽ biểu đồ -->
<div class="page-wrapper">
    <canvas id="myChart" width="400" height="200"></canvas>
</div>
<script>
    // Dữ liệu từ PHP
    var phimData = <?php echo json_encode($phimData); ?>;

    // Tạo mảng tên phim
    var tenPhim = phimData.map(function (phim) {
        return phim.name;
    });

    // Tạo mảng số vé
    var soVe = phimData.map(function (phim) {
        return phim.so_ve;
    });

    // Tạo mảng doanh thu
    var doanhThu = phimData.map(function (phim) {
        return phim.doanh_thu;
    });

    // Tạo biểu đồ cột
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: tenPhim,
            datasets: [{
                label: 'Số Vé',
                data: soVe,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }, {
                label: 'Doanh Thu',
                data: doanhThu,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

