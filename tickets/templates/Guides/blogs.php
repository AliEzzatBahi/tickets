<section class="inner-pages text-center" style="background:url(<?= BASE_URL ?>/frontend/wp-content/uploads/2016/12/banner-bg.jpg)">
    <div class="container">
        <div class="white_text div_zindex">
            <h1 class="page_title">Our Blogs</h1>
        </div>
    </div>   
    <div class="dark-overlay"></div>
</section>

<section class="our_articles grid_view">
	<div class="container">
        <div class="row">
            <?php
                foreach($blogs as $blog){
            ?>
                <article id="post-1242" class="col-md-4 col-sm-4 blog_wrap">
                    <div class="blog_img margin-btm-20">
                        <a href="#">
                            <img width="640" height="408" src="<?= BASE_URL ?>/frontend/wp-content/uploads/2016/12/blog_800x510-1.jpg" class="img-responsive center-block wp-post-image" alt="" loading="lazy" srcset="http://php.webmasterdriver.net/beevent/wp-content/uploads/2016/12/blog_800x510-1.jpg 800w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2016/12/blog_800x510-1-300x191.jpg 300w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2016/12/blog_800x510-1-768x490.jpg 768w" sizes="(max-width: 640px) 100vw, 640px" /> 
                        </a>
                    </div>
                    <div class="blog_meta">
                        <p><a href="#"><?= date("jS F Y", strtotime($blog->created)) ?></a></p>
                    </div>
                    <h5><a href="#"><?= $blog->title ?></a></h5>
                    <p><?= $blog->post ?></p>
                </article>
            <?php
                }
            ?>

            <ul class='page-numbers'>
                <li><span aria-current="page" class="page-numbers current">1</span></li>
                <li><a class="page-numbers" href="#">2</a></li>
                <li><a class="next page-numbers" href="#">Next</a></li>
            </ul>
        </div>

    </div>

</section>