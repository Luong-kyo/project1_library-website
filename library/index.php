<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./js/jquery-3.6.0.js">
    <link rel="stylesheet" href="./asset/fontawesome-free-6.2.0-web/fontawesome-free-6.2.0-web/css/all.min.css">
    <title>Thư viện</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body>

    <?php
    include('include/header.php');
    if(isset($_GET['quanly'])){
        $page= $_GET['quanly'];
    }else{
        $page='';
    }

    if($page=='news'){
        include('include/slider.php');
        include('include/news.php');
    }elseif($page=='books'){
        include('include/books.php');
    }elseif($page=='author'){
        include('include/author.php');
    }elseif($page=='contact'){
        include('include/contact.php');
    }elseif($page=='chitietsach'){
        include('chitiet_sach.php');
    }else{
        include('include/slider.php');
        include('include/home.php');
    }
    include('include/footer.php');
    ?>


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src='./js/app.js'></script>



    <!-- ----------------------------------------------------- -->
    

</body>

</html>