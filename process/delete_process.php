<?php
    $conn = mysqli_connect('localhost', 'hyodev2', 'gmlwoqkqh1!', 'hyodev2');
    $query = "delete from buytable where title='{$_POST['title']}'";
    $result = mysqli_query($conn, $query);
    if($result) {
        // unlink("../img/".$_POST['imgsrc']);  // img의 파일도 같이 삭제
        echo "삭제되었습니다.";
    }else {
        echo "실패했습니다.";
    }
    header('Location:../pages/cart.php');
?>