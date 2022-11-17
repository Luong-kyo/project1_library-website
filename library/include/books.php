<div class="news-container container">
    <?php
        include('recommend-bar.php')
        ?>
    <div class="n-container">
        <div class="box-content">
            <?php
            $sql_sach = mysqli_query($connect,"SELECT * FROM tbl_sach order by sach_id DESC");
            while($row_sach = mysqli_fetch_array($sql_sach)){
            ?>
            <div class="book-grid">
                <img src="<?php echo $row_sach['sach_img'] ?>" alt="">
                <a href=""><?php echo $row_sach['sach_name'] ?></a>
                <p><?php echo $row_sach['sach_chitiet'] ?></p>
                <p><time>20/10/2022</time></p>
            </div><?php
            }
        ?> 
        
        </div>

        <div class="pagination">
           
            <a href="?quanly=chitietsach">&laquo;</a>
            <a href="#">1</a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </div>
</div>