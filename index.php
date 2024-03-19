<?php
session_start();

include_once "admin/models/pdo.php";
include_once "admin/models/theloai.php";
include_once "admin/models/phim.php";
include_once "admin/models/lichchieu.php";
include_once "admin/models/khunggiochieu.php";
include_once "admin/models/taikhoan.php";
include_once "admin/models/phong.php";

$listtheloai = loadall_theloai();
$listphim = loadall_phim_home();

include_once "user/header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'ctphim':          
            $id = $_GET['id'];
            $anhmota=load_anhct($id);
            $ctphim = loadone_ctphim($id);
            $listlichchieu = loadall_lichchieu();
            $khunggio = load_khunggio($id);
            $ngay = load_ngay($id);
            $gio = load_gio($id);
            include_once "user/view/ctphim.php";
            break;

        case 'phong':
            $idkhunggio = $_GET['idkhunggio'];
            $ve = ve($idkhunggio);
            include_once "user/view/ghe.php";
            break;
        case 'datve':
            if (isset($_POST['tieptuc'])) {
                $iduser = $_SESSION['user']['id'];
                $ghe = $_POST['ghe'];
                $idkhunggio = $_POST['idkhunggio'];
                $idphong = $_POST['idphong'];
                $ngaydat = $_POST['ngaydatve'];
                $tongtien = $_POST['tongtien'];
                insert_ve($iduser, $tongtien, $ghe, $idkhunggio, $idphong, $ngaydat);
            }
           
            $listbongnuoc = loadall_bongnuoc();
            // var_dump($listbongnuoc);
            include_once "user/view/bill.php";
            break;
        case 'uplai':
            echo "<script> alert('Đặt vé thành công');</script>";
            $ghe = $_POST['ghe'];
            $GheArray = explode(', ', $ghe);
            foreach ($GheArray as $viTri) {
                $sql = "UPDATE ghe SET trang_thai = 'da_dat' WHERE ten_ghe = '$viTri'";
                pdo_execute($sql);
            }
            $idcombo = $_POST['idcombo'];
            $tongtien = $_POST['tongtien'];
            $id = $_POST['id'];
            update_ve($idcombo, $tongtien, $id);
            include_once "user/home.php";
            break;

        case 'lichsu_ve':
            $id = $_SESSION['user']['id'];
            $loadbill = load_bill_tk($id);
            include_once "user/view/lichsu_ve.php";
            break;
        case 'ctve':
            $id = $_GET['id'];
            $ve = ctve($id);
            include_once "user/view/ctve.php";
            break;
        case 'phim':
            if (isset($_GET['idtl']) && ($_GET['idtl'] > 0)) {
                $idtl = $_GET['idtl'];
            } else {
                $idtl = 0;
            }
            if (isset($_POST['kyw']) && $_POST['kyw'] != 0) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $dsphim = loadall_phim($kyw, $idtl);
            $tentl = load_ten_theloai($idtl);
            include_once "user/view/phim.php";
            include_once "user/home.php";
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $taikhoan = dangnhap($user, $pass);
                if (is_array($taikhoan) && $taikhoan['vai_tro'] == 0) {
                    $_SESSION['user'] = $taikhoan;
                    $currentURL = $_SERVER['REQUEST_URI'];
                    echo '<script type="text/javascript">window.location.href = "' . $currentURL . '?reload=true";</script>';
                } else {
                    $thongbao = "Sai tên đăng nhập hoặc mật khẩu. Vui lòng nhập lại.";
                }
            }
            include_once "user/view/tai_khoan/dangnhap.php";
            break;
        case 'quen_mk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao1 = "Mật khẩu của bạn là: " . $checkemail['pass'];
                } else {
                    $thongbao1 = "Email này không tồn tại";
                }
            }
            include "user/view/tai_khoan/quen_mk.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $role = $_POST['role'];
                insert_taikhoan($email, $user, $pass, $role);
                $thongbao = "alert('Đăng ký thành công')";
            }
            include_once "user/view/tai_khoan/dangky.php";
            break;
        case 'tttk':
            if (isset($_POST['tttk']) && ($_POST['tttk'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $dia_chi = $_POST['dia_chi'];
                $sdt = $_POST['sdt'];
                $id = $_POST['id'];
                $role = $_POST['role'];
                $_SESSION['user'] = dangnhap($user, $pass);
                // $thongbao="alert('Cập nhật thành công')";
                // header('Location: index.php?act=update_tk');                        
            }
            include "user/view/tai_khoan/thongtin_tk.php";
            break;
        case 'edit':
            include "user/view/tai_khoan/update_tk.php";
            break;
        case 'update_tk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $dia_chi = $_POST['dia_chi'];
                $sdt = $_POST['sdt'];
                $id = $_POST['id'];
                $role = $_POST['role'];
                update_taikhoan($id, $user, $pass, $email, $dia_chi, $sdt, $role);
                $_SESSION['user'] = dangnhap($user, $pass);
                $thongbao = "alert('Cập nhật thành công')";
                // header('Location: index.php?act=update_tk');                        
            }
            include "user/view/tai_khoan/update_tk.php";
            break;

        case 'dangxuat':
            unset($_SESSION['user']);

            echo '<script type="text/javascript">window.location.href = "' . $currentURL . '?reload=true";</script>';
            break;

        default:
            include 'user/home.php';
            break;
    }
} else {
    include_once "user/home.php";
}

include_once "user/footer.php";
