<?php
if (isset($_POST['username']) && isset($_POST['password'])) {

    set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
    include('Net/SSH2.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $days = intval($_POST['day']);
    $ssh = new Net_SSH2('192.168.1.44');
    if (!$ssh->login('root', 'example')) {
        exit('Login Failed');
    }
    $result = "-e '$password\n$password\n'|passwd $username &> /dev/null";
    $result .= $ssh->exec("useradd -e `date -d '$days days' +'%Y-%m-%d'` -s /bin/false -M $username");
    if (strpos($result, 'already exists') >= 1) {
        echo "<script>alert('ผู้ใช้งาน $username มีอยู่แล้วในระบบ');window.location.href='/'</script>";
    } else {
        $result .= $ssh->exec("echo -e '$password\n$password\n'|passwd $username &> /dev/null");
        echo $result;
    }
} else {
    echo "Data Invalid";
}