<?php
    session_start();
     // Lấy đường dẫn gốc của trang web
    $documentRoot = $_SERVER['DOCUMENT_ROOT'];
    
    // Đường dẫn tương đối đến models/pdo.php
    $pdoPath = '/DUAN1_MOVIE/admin/models/pdo.php';
    
    // Hoặc có thể sử dụng DIRECTORY_SEPARATOR để giúp chuyển đổi giữa các hệ điều hành
    // $pdoPath = DIRECTORY_SEPARATOR . 'DUAN1_MOVIE' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'pdo.php';
    
    // Tạo đường dẫn tuyệt đối
    $absolutePath = $documentRoot . $pdoPath;
    
    // Sử dụng đường dẫn tuyệt đối để include tệp tin
    require_once $absolutePath;
    
    // Tương tự cho file binhluan.php
    $binhluanPath = '/DUAN1_MOVIE/admin/models/binhluan.php';
    $absoluteBinhluanPath = $documentRoot . $binhluanPath;
    require_once $absoluteBinhluanPath;  
    $idphim=$_REQUEST['idphim'];
    $dsbl=loadall_binhluan($idphim);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .binhluan table{
            width: 90%;
            margin-left: 5%;
        }
        
        .mg{
            margin: 20px 0px;
        }
        .binhluanform input[type="text"]{
            width: 600px;
        }
        .binhluanform input[type="submit"]{
            width: 200px;
        }
    </style>
</head>
<body>


<div class="row mb">
   
    <div class="row boxcontent binhluan">
        <table>
            <tr>
               <th>Người dùng</th>
                <th>Nội dung</th>             
                <th>Ngày bình luận</th>
            </tr>
            <?php
                foreach($dsbl as $bl){
                    extract($bl);
                    $linksp="index.php?act=ctphim=".$id;                 
                    echo '<tr><td>'.$user.'</td>';
                    echo '<td>'.$noidung.'</td>';
                    echo '<td>'.$ngaybinhluan.'</td></tr>';
                    
                }   
            ?>           
        </table>
    </div>
    <div class="boxfooter binhluanform">
        <form  method="post" action="<?=$_SERVER['PHP_SELF'];?>">
            <input type="hidden" name="idphim" value="<?=$idphim?>">
            
            <input type="text" name="noidung" placeholder="Nhập nội dung bình luận">
            
            <?php
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user']);
            ?>
            <input style="border:none;margin-top:10px;border-radius: 25px;padding: 11px 24px;font-weight: 600;color: #ffffff;text-transform: uppercase;background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);" type="submit" class="mg" value="Gửi bình luận" name="guibinhluan">
            <?php }else { ?>
            <?php echo '<br>Bạn phải đăng nhập mới có thể bình luận.'; ?>
            
            <?php }?>
        </form>
    </div>
    
    <?php
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            $noidung=$_POST['noidung'];
            $idphim=$_POST['idphim'];
            $user=$_SESSION['user']['user'];
            $ngaybinhluan=date('h:i:sa d/m/Y');
            insert_binhluan($noidung,$user,$idphim,$ngaybinhluan);
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
    ?>
</div>


</body>
</html>