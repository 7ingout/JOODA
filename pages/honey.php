<?php include_once '../include/header.php' ?>
<?php
    $conn = mysqli_connect('localhost', 'hyodev2', 'gmlwoqkqh1!', 'hyodev2');
    $query = "select * from product where type = 'honey'";
    $result = mysqli_query($conn, $query);
    function printList() {
        global $result;
        while($row = mysqli_fetch_array($result)){
            echo "<li><a href='detail.php?id={$row['id']}'><img src='/jooda/img/product/{$row['imgsrc']}'>
            <p class='pro_title'>{$row['title']}</p>
            <p class='pro_price'>{$row['price']}원</p></a></li>";
        }
        ?>
    <?php include_once '../include/footer.php' ?>
        <?php
            }
        ?>
        <?php include_once '../include/skell.php' ?>
<div id="product_list">
        <h2>애인선물</h2>
        <h3>오늘부터 1일!</h3>
        <ul>
            <?php printList(); ?>
        </ul>
</div>