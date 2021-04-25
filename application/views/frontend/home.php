
<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('dependencies/style'); ?>
    <title>İzmir</title>
</head>
<body>
<style>
    body{
        background:#ffffff;
    }
    @media (min-width: 1200px) { .container {
        max-width: 1200px;
    } }
</style>
<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: white">
    <img src="assets\img\HTML5_logo_and_wordmark.svg" class="navbar-brand ml-5" href="#" style="height: 60px", width="60px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-3" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php
                foreach ($category as $cat) {
                    $category_id = $cat['category_id'];
                    $category_title = $cat['category_title'];
                    $category_slug = $cat['category_slug'];
                    $category_navStatus = $cat['category_navStatus'];
                }
            ?>
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <?php echo $category[0]['category_title']; ?>
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $category[1]['category_title']; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Lorem Ipsum</a>
                    <a class="dropdown-item" href="#">Lorem Ipsum</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><?php echo $category[2]['category_title']; ?></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $category[3]['category_title']; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Lorem Ipsum</a>
                    <a class="dropdown-item" href="#">Lorem Ipsum</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><?php echo $category[4]['category_title']; ?></a>
            </li>
        </ul>
    </div>
</nav>
    <?php
        foreach ($slider as $slide) {
            $slider_id = $slide['slider_id'];
            $slider_name = $slide['slider_name'];
            $slider_img = $slide['slider_img'];
            $order = $slide['order'];
        }
    ?>

    <div id="carouselExampleControls" class="carousel slide mb-3" data-ride="carousel"  style="max-height: 600px">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/izmir_foto_8.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/izmir_foto_2.jpg" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" >
            <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="font-size: 50px"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<div class="container" >
    <div class="col-md-12">
        <div class="card mb-2">
            <h5 class="card-title mt-2 mb-4">
                <?php
                    foreach($articles as $article){
                        $article_id = $article['article_id'];
                        $article_slug = $article['article_slug'];
                        $article_name = $article['article_name'];
                        $article_text = $article['article_text'];
                        echo $article_name;
                    }
                ?>
            </h5>
            <div class="card-body mb-4" style="padding: 0">
                <p class="card-text text-truncate">
                    <?php echo $article_text ?>
                </p>
                <a href="#" class="btn btn-primary mt-2">Devamı</a>
            </div>
        </div>
        <div class="card mb-2">
            <div class="row">
                <h5 class="card-title mt-2 col-md-11">Haberler</h5>
                <a href="#" class="btn btn-second">
                    <svg fill="#29a3a3" width="40" height="40" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                        <path d="M20 20v-20h2v20h20v2h-20v20h-2v-20h-20v-2h20z"/>
                    </svg>
                </a>
            </div>
            <?php
            foreach($news as $info){
                $news_id = $info['news_id'];
                $news_title = $info['news_title'];
                $news_slug = $info['news_slug'];
                $news_img = $info['news_img'];
                $news_text = $info['news_text'];
                $news_display = $info['news_display'];
            }
            ?>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="assets/img/izmir_foto_3.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h  id="postNew" class="card-subtitle mb-2"><?php echo $news[0]['news_title']; ?></h>
                        <p class="card-text"><?php echo $news[0]['news_text']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer font-small blue pt-4">
    <div class="container">
        <div class="footer-copyright text-left py-3">©Proje
            <img src="assets\img\HTML5_logo_and_wordmark.svg" href="#" style="height: 40px", width="40px", align="right"></a>
        </div>
    </div>
</footer>
    <?php $this->load->view('dependencies/script'); ?>
</body>
</html>