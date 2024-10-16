<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3073">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <img
                        src="./img/blog-4.jpg"
                        class="card-img-top"
                        alt="" />
                    <div class="card-body">
                        <h5 class="card-title">Lorem Ipsum Dolor</h5>
                        <p class="card-text">
                            <small class="text-muted fa fa-calendar"> May 14, 2017</small>
                            <span>|</span>
                            <small class="text-muted fa fa-user"> Admin</small>
                        </p>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Consectetur edit, necessitatibus accusantium assumenda accusamus
                            unde atque nisi sint fuga rem, ut aut reprehenderit ad tempora
                            quisquam? A id fuga recusandae!
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Search</h5>
                        <form>
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Search" />
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="sidebar-widget recent-posts">
                        <h3 class="widget-title">Recent Posts</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Lorem ipsum dolor</a></li>
                            <li><a href="#">Consectetur adit, necessitatibus accusantium assumenda</a></li>
                            <li><a href="#">Lorem ipsum dolor</a></li>
                            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        </ul>
                    </div>
                    <div class="mb-4">
                    <div class="sidebar-widget recent-posts">
                        <h3 class="widget-title">Recent Comments</h3>
                        <ul class="list-unstyled">
                            <li>Maria on <a href="#">Ninja Silhouette</a></li>
                            <li>Maria on <a href="#">Ship Your Idea</a></li>
                            <li>Maria on <a href="#">Woo Single #2</a></li>
                            <li>Maria on <a href="#">Happy Ninja</a></li>
                            <li>Ryan on <a href="#">Ninja Silhouette</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>