<?php 
    include_once('db/connect.php');
?>
<div class="header">
    <div class="header-bar">
        <a class="logo" href="?quanly=home">LIBRARY</a>
        <ul class="hd-icon">
            <li>
                <input type="text">
                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
            </li>
            <li><a href=""><i class="fa-solid fa-bell"></i></a></li>
            <li><a href=""><i class="fa-solid fa-heart"></i></a></li>
            <li class="user-icon more">
                <a><i class="fa-solid fa-user"></i></a>
                <ul class="hidden-list">
                    <li><a href="?quanly=manager">Quản lý tài khoản</a></li>
                    <li><a href="?quanly=login">Đăng nhập</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- danh sách menu -->
    <?php
        $sql_category = mysqli_query($connect,'SELECT * FROM tbl_category ORDER BY category_id ASC')
        ?>

    <div class="list-bar">
        <ul class="list">
            
            <li><a href="?quanly=">Trang chủ</a></li>
            <li><a href="?quanly=news">Tin tức</a></li>
            <li class="more-book more">
                <a href="?quanly=books">Sách
                    <i class="fa-solid fa-chevron-down"></i>
                </a>
                <ul class="hidden-list">
                    <?php
                        while($row_category = mysqli_fetch_array($sql_category)){
                        // $id_category = $row_cate_home['category_id'];    
                    ?>
                    <li><a href="?quanly=books&idcategory=<?php echo $row_category['category_id']?>">
                            <?php echo $row_category['category_name'] ?>
                        </a></li>
                    <?php
                    }
                    ?>
                </ul>
            </li>
            <li><a href="?quanly=author">Tác giả</a></li>
            <li><a href="?quanly=contact">Liên hệ</a></li>
        </ul>
    </div>
</div>