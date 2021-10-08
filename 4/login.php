<?php
$a = setcookie('user','0',time()+300);
if($_POST['hao']=='zhimakaimen'){
    if ($_COOKIE['user']==0){
        echo '请用管理员身份访问';
    }elseif ($_COOKIE['user']==1){
        echo 'flag{dadsadsagzcxcdgx}';
    }
}else{
    echo '';
}

