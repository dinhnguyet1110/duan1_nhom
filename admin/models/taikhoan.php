<?php
        function insert_taikhoan($email,$user,$pass,$role){
           
            if($role==1){
                $sql = "INSERT INTO taikhoan(user,pass,email,vai_tro) values('$user','$pass','$email','1')";
            }
            else{
                $sql = "INSERT INTO taikhoan(user,pass,email,vai_tro) values('$user','$pass','$email','0')";
            }       
            pdo_execute($sql);
        }

        function delete_taikhoan($id){
            $sql="DELETE FROM taikhoan where id=".$id;
            pdo_execute($sql);
        }

        function loadall_taikhoan(){
            $sql="SELECT * FROM taikhoan order by id desc";
            $listtaikhoan = pdo_query($sql);
            return $listtaikhoan;
        }
        function dangnhap($user,$pass) {
            $sql="SELECT * FROM taikhoan WHERE user='".$user."' and pass='".$pass."'";
            $taikhoan = pdo_query_one($sql);
            return $taikhoan;
        }  

        function checkemail($email){
            $sql="SELECT * FROM taikhoan where email='".$email."'";
            $tk=pdo_query_one($sql);
            return $tk;
        }

    function update_taikhoan($id,$user,$pass,$email,$dia_chi,$sdt){     
        $sql = "UPDATE taikhoan set user='".$user."', pass='".$pass."', email='".$email."', dia_chi='".$dia_chi."', sdt='".$sdt."' where id=".$id;
        pdo_execute($sql);
    }

?>