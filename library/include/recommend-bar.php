

<div class="rcmd-column">
    
    <h2>Sách mới</h2>
    <div class="new-book-cl">
        
        <ul class="new-book">
            <?php
        $sql_sach = mysqli_query($connect,"SELECT * FROM tbl_sach order by sach_id DESC");
        while($row_sach = mysqli_fetch_array($sql_sach)){
        ?>
            <li>
                <img width="80px" height="120px" src="<?php echo $row_sach['sach_img']?>" alt="">
                <div class="inf-book">
                    <a href=""><?php echo $row_sach['sach_name'] ?></a>
                    <a href="">
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
            </li>
    <?php
        }
    ?>
        </ul>
        
    </div>
    


    <h2>Tác giả nổi bật</h2>
    <div class="top-author">

        <ul>
            <li>
                <img width="80px" height="80px" src="./asset/pic/businessman.png" alt="">
                <div class="inf-author">
                    <a href="">Tên tác giả</a>
                    <a href="">số sách</a>
                </div>
            </li>
            <li>
                <img width="80px" height="80px" src="./asset/pic/businessman.png" alt="">
                <div class="inf-author">
                    <a href="">Tên tác giả</a>
                    <a href="">số sách</a>
                </div>
            </li>
            <li>
                <img width="80px" height="80px" src="./asset/pic/businessman.png" alt="">
                <div class="inf-author">
                    <a href="">Tên tác giả</a>
                    <a href="">số sách</a>
                </div>
            </li>
            <li>
                <img width="80px" height="80px" src="./asset/pic/businessman.png" alt="">
                <div class="inf-author">
                    <a href="">Tên tác giả</a>
                    <a href="">số sách</a>
                </div>
            </li>
            <li>
                <img width="80px" height="80px" src="./asset/pic/businessman.png" alt="">
                <div class="inf-author">
                    <a href="">Tên tác giả</a>
                    <a href="">số sách</a>
                </div>
            </li>

        </ul>
    </div>
    <div class="book-page">
    </div>
</div>