<div id="container">
<div class="content-header content-header-shout content-header-shout-single">
<h1 class="yahei">
<a href="<?php bloginfo('url');?>/shout">呐喊</a>
</h1>
</div>
<div class="main main-shout">
<?php
            while (have_posts()) : the_post();
                ?>
<article id="post-<?php echo $post->ID;?>" class="shout type-shout entry-common clearfix">
<div class="entry-meta">
<span><?php past_date() ?></span>
</div>
<div class="entry-content clearfix">
<div class="entry-body">
<div class="shout_content clearfix">
<blockquote>
<span><?php $key="shout-text"; echo get_post_meta($post->ID, $key, true); ?></span>
</blockquote>
<div class="shout_original t-r">
<span>—— <?php $key="shout-author"; echo get_post_meta($post->ID, $key, true); ?></span>
</div>
</div>
<div class="shout_comment">
<h3>《<?php the_title();?>》:</h3>
<?php the_content();?>
</div>

</div></div>
<div class="author-profile">
                        <div class="clear"></div>
                        <div class="autho-profi-face">
                            <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentytwelve_author_bio_avatar_size', 50 ) ); ?>
                        </div>
                        <div class="author-profile-text">
                            <h2> <a href="<?php echo bools('d_google_plus')?>" rel="author"><?php echo get_the_author() ; ?></a> </h2>
                            <p>
                                <?php the_author_meta( 'description' ); ?>
                            </p>
                        </div>
                        <?php if ( bools('d_qrcode_b')){ ?>
                            <div class="author-profile-qrcode">
                                <img width="50" height="50" alt="qrcode" src="<?php echo bools('d_qrcode')?>">
                                <div class="dropdown-area"><span class="top-padding"></span>
                                    <dl>
                                        <dd class="t-c"> <a href="javascript:;">扫描关注<?php bloginfo('name');?></a> </dd>
                                        <dt> <a class="ab-item" href="#" tabindex="-1"> <img class="avatar avatar-64 photo" width="220" height="220px" src="<?php echo bools('d_qrcode')?>" alt=""> </a> </dt>
                                    </dl>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="author-profile-list">
                            <?php if( get_the_author_meta( 'sinaweibo' )) {?><a target="_blank" href="<?php echo the_author_meta( 'sinaweibo' ) ?>" rel="external">微博</a><?php } ?>
                            <?php if( get_the_author_meta( 'zhihu' )) {?><a target="_blank" href="<?php echo the_author_meta( 'zhihu' ) ?>" rel="external">知乎</a><?php } ?>
                            <?php if( get_the_author_meta( 'taobao' )) {?><a target="_blank" href="<?php echo the_author_meta( 'taobao' ) ?>" rel="external">淘宝</a><?php } ?>
                            <?php if( get_the_author_meta( 'wangyi' )) {?><a target="_blank" href="<?php echo the_author_meta( 'wangyi' ) ?>" rel="external">网易云阅读</a><?php } ?>
                            <?php if( get_the_author_meta( 'instagram' )) {?><a target="_blank" href="<?php echo the_author_meta( 'instagram' ) ?>" rel="external">Instagram</a><?php } ?>
                            <div id="likebtn" class="bdlikebutton"></div>
                            <div id="share" class="share "> <a id="share-weibo" title="分享到新浪微博" href="javascript:;"></a> <a id="share-tx" title="分享到腾讯微博" href="javascript:;"></a> <a id="share-qq" title="分享到QQ空间" href="javascript:;"></a> <a id="share-douban" title="分享到豆瓣" href="javascript:;"></a> <a id="share-renren" title="分享到人人网" href="javascript:;"></a> </div>
                        </div>
                        <div class="clear"></div>
                    </div>
<nav class="single-nav"> <span class="left">
      <?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'presscore' ) . '</span> %title' ); ?>
      </span> <span class="right">
      <?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'presscore' ) . '</span>' ); ?>
      </span> </nav>
</article>
<?php endwhile;?>
</div></div>