<div class="container">
    <div class="recommend">
        <h1>Sách nổi bật</h1>

        <div class="recommend-books">
            <div class="recommend-book">
                <img src="./asset/pic/tuoi-tre-dang-gia-bao-nhieu.jpg" width="250px" height="400px" alt="">
                <h3>Rosie Nguyễn</h3>
                <h3>Tuổi trẻ đáng giá bao nhiêu aâaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaa aaaaaaaaaaaaaaa</h3>
            </div>

            <div class="recommend-book">
                <img src="./asset/pic/dac-nhan-tam.jpg" width="250px" height="400px" alt="">
                <h3>Dale Carnegie</h3>
                <h3>Đắc nhân tâm</h3>
            </div>

            <div class="recommend-book">
                <img src="./asset/pic/Nhagia-Kim.jpg" width="250px" height="400px" alt="">
                <h3>Paulo Coelho</h3>
                <h3>Nhà giả kim</h3>
            </div>
        </div>
    </div>


    <?php
            $sql_cate_home = mysqli_query($connect,'SELECT * FROM tbl_category ORDER BY category_id ASC');
            while($row_cate_home = mysqli_fetch_array($sql_cate_home)){
                $id_category = $row_cate_home['category_id'];
        ?>
    <div class="books">
        <h1><?php echo $row_cate_home['category_name'];?> </h1>

        <div class="slide-books">
            <?php
                    $sql_sach = mysqli_query($connect,"SELECT * FROM tbl_sach order by sach_id ASC");
                    while($row_sach = mysqli_fetch_array($sql_sach)){
                        if($row_sach['category_id']==$id_category){
                    ?>
            <div class="slide-book">
                <div class="sach-img">
                    <img width="200px" height="300px" src="<?php echo $row_sach['sach_img']?>" alt="">
                </div>
                <a href="?quanly=sach&id=<?php echo $row_sach['sach_id']?>">
                    <?php echo $row_sach['sach_name'] ?>
                </a>
                <a href="?quanly=tacgia&id=<?php echo $row_sach['author_id']?>">
                    <?php 
                        $sql_author = mysqli_query($connect,"SELECT * FROM tbl_author order by author_id ASC");
                        while($name_author = mysqli_fetch_array($sql_author)){
                            if($row_sach['author_id']==$name_author['author_id']){
                                echo $name_author['author_ten'];
                            }
                        }
                        ?>
                </a>
            </div>
            <?php
                    }
                }
                ?>
        </div>
    </div>
    <?php
            }
    ?>
</div>