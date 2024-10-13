<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
    <section class="our-news">
        <h2>OUR NEWS</h2>
        <div class="news-container">
            <div class="news-item">
                <img src="https://demo.brothersthemes.com/phone-repair/wp-content/uploads/sites/3/2016/12/blog-01-360x185.jpg" alt="" />
                <a href="#" class="news-title"><h3>HOW TO CHOOSE HEADPHONES FOR YOUR SMARTPHONE</h3></a>
                <p>
                    Praesent sit amet erat ornare, sodales risus quis, tempus risus. Sed
                    leo enim, pharetra vestibulum metus lobortis, ultricies efficitur
                    eros.
                </p>
                <div class="news-meta">
                    <span><i class="fa fa-calendar"></i> Dec 7, 2016</span>
                    <span><i class="fa fa-user"></i> admin</span>
                    <span><a href="#" class="read-more">READ MORE</a></span>
                </div>
            </div>
            <div class="news-item">
                <img src="https://demo.brothersthemes.com/phone-repair/wp-content/uploads/sites/3/2016/12/blog-1-360x185.jpg" alt=""/>
                <a href="#" class="news-title"><h3>THE TRANSFER OF DATA FROM TABLET TO PHONE</h3></a>
                <p>
                    Interdum et malesuada fames ac ante ipsum primis in faucibus.
                    Aliquam nec blandit magna. Proin hendrerit molestie porttitor.
                </p>
                <div class="news-meta">
                    <span><i class="fa fa-calendar"></i> Dec 5, 2016</span>
                    <span><i class="fa fa-user"></i> admin</span>
                    <span><a href="#" class="read-more">READ MORE</a></span>
                </div>
            </div>
            <div class="news-item">
                <img src="https://demo.brothersthemes.com/phone-repair/wp-content/uploads/sites/3/2016/12/blog-2-360x185.jpg" alt=""/>
                <a href="#" class="news-title"><h3>TERMS OF USE OF PHONES AND TABLETS IN HOT COUNTRIES</h3></a>
                <p>
                    Interdum et malesuada fames ac ante ipsum primis in faucibus.
                    Aliquam nec blandit magna. Proin hendrerit molestie porttitor.
                </p>
                <div class="news-meta">
                    <span><i class="fa fa-calendar"></i> Dec 2, 2016</span>
                    <span><i class="fa fa-user"></i> admin</span>
                    <span><a href="#" class="read-more">READ MORE</a></span>
                </div>
            </div>
        </div>
    </section>
