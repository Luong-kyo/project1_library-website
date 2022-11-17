


<div class="news-container container">
    <?php include('recommend-bar.php') ?>
    <div class="n-contents">
        <div class="news-content">
            <?php
                $sql_news = mysqli_query($connect,"SELECT * FROM tbl_tintuc order by tintuc_id ASC");
                while($row_news = mysqli_fetch_array($sql_news)){
                ?>
            <div class="tin-tuc">
                <img src="<?php echo $row_news['tintuc_img']?>" alt="">
                <div class="tt-content">
                    <a href=""><?php echo $row_news['tintuc_title']?></a>
                    <div>
                        <span><time><?php echo $row_news['tintuc_time']?></time></span>
                        <p><?php echo $row_news['tintuc_tomtat']?></p>
                    </div>
                    <a class="read-more" href="">xem thêm</a>
                </div>
            </div>
            <?php
                }
            ?>

            <!-- <div class="tin-tuc">
                <img src="./asset/pic/thong-bao.png" alt="">
                <div class="tt-content">
                    <a href="">Trao đổi cán bộ và học tập kinh nghiệm</a>
                    <div>
                        <span><time>20/10/2022</time></span>
                        <p>Trong khuôn khổ hợp tác gữa Đại học Bách khoa HN và các Đại học trên Thế giới, để tăng cường
                            giao lưu và học hỏi kinh nghiệm tiên tiến từ đối tác. ĐHBKHN có kế hoạch tiếp nhận các
                            chuyên gia nước ngoài sang trao đổi và làm việc tại trường. Từ ngày 31.10.2022 – 4.11.2022
                            Thư viện TQB đã đón tiếp và làm việc với chuyên gia Thư viện đến từ trường ĐH Madrid - Đại
                            học Universidad Complutense Madrid (UCM).

                            Ngay buổi làm việc đầu tiên của Chuyên gia tại Thư viên, hai bên đã thống nhất về cách trao
                            đổi, chia sẻ và hợp tác. Cùng tiếp đón và làm việc với chuyên gia là BGĐ và đại diện các
                            trưởng phòng chuyên môn của Thư viện. Hai bên đã có phần giới thiệu khái quát về Trường Đại
                            học của mình nói chung và về Thư viện nói riêng.</p>
                    </div>
                    <a class="read-more" href="">xem thêm</a>
                </div>
            </div> -->

            <div class="pagination">
                <a href="#">&laquo;</a>
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
</div>