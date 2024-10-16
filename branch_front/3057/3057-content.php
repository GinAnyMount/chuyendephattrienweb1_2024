<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3057">
    <section class="container our-news">
        <h2 class="text-center mb-4">OUR NEWS</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="news-item card">
                    <img src="./img/blog-1.jpg" alt="" class="card-img-top" />
                    <div class="card-body">
                        <a href="#" class="news-title">
                            <h3>HOW TO CHOOSE HEADPHONES FOR YOUR SMARTPHONE</h3>
                        </a>
                        <p class="card-text">
                            Praesent sit amet erat ornare, sodales risus quis, tempus risus. Sed
                            leo enim, pharetra vestibulum metus lobortis, ultricies efficitur
                            eros.
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="news-meta d-flex justify-content-between">
                            <span><i class="fa fa-calendar"></i> Dec 7, 2016</span>
                            <span><i class="fa fa-user"></i> admin</span>
                            <a href="#" class="read-more">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="news-item card">
                    <img src="./img/blog-2.jpg" alt="" class="card-img-top" />
                    <div class="card-body">
                        <a href="#" class="news-title">
                            <h3>THE TRANSFER OF DATA FROM TABLET TO SMARTPHONE</h3>
                        </a>
                        <p class="card-text">
                            Interdum et malesuada fames ac ante ipsum primis in faucibus.
                            Aliquam nec blandit magna. Proin hendrerit molestie porttitor.
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="news-meta d-flex justify-content-between">
                            <span><i class="fa fa-calendar"></i> Dec 5, 2016</span>
                            <span><i class="fa fa-user"></i> admin</span>
                            <a href="#" class="read-more">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="news-item card">
                    <img src="./img/blog-3.jpg" alt="" class="card-img-top" />
                    <div class="card-body">
                        <a href="#" class="news-title">
                            <h3>TERMS OF USE OF PHONES AND TABLETS IN HOT COUNTRIES</h3>
                        </a>
                        <p class="card-text">
                            Interdum et malesuada fames ac ante ipsum primis in faucibus.
                            Aliquam nec blandit magna. Proin hendrerit molestie porttitor.
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="news-meta d-flex justify-content-between">
                            <span><i class="fa fa-calendar"></i> Dec 2, 2016</span>
                            <span><i class="fa fa-user"></i> admin</span>
                            <a href="#" class="read-more">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>