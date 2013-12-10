<?php get_header() ;?>
    <div id="container">
        <div id="content" role="main">
            <?php if ( have_posts() ) : ?>
                <div class="content-cat">
                    <h1 class="tag">
                        <ul class="post-categories">
                            <li><a href=""> <?php printf( __( '%s', 'twentytwelve' ),  single_tag_title( '', false )  ); ?></a></li>
                        </ul>
                    </h1>
                    <?php if ( tag_description() ) : // Show an optional tag description ?>
                        <div class="description"><?php echo tag_description(); ?></div>
                    <?php endif; ?>
                </div>
                <?php query_posts( $query_string . '&order=ASC' );while (have_posts()) : the_post(); ?>
                    <article id="<?php echo $post->ID?>" class="entry-common clearfix" itemtype="http://schema.org/Article" itemscope="itemscope" data-id="<?php echo $post->ID?>">
                        <meta itemprop="inLanguage" content="zh-CN">
                        <header class="entry-header">
                            <div class="pre-cat">
                                <div class="pre-catinner">
                                    <?php the_category(', ') ?>
                                </div>
                                <div class="pre-catarrow"></div>
                            </div>
                            <h2 class="entry-name" itemprop="headline"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
                                    <?php the_title(); ?>
                                </a></h2>
                            <?php if ( comments_open() ) : ?>
                                <div class="entry-commentnumber"> <span class="number">
          <?php comments_number('0', '1', '%'); ?>
          </span> <span class="corner"></span> </div>
                            <?php endif; // comments_open() ?>
                        </header>
                        <address class="entry-meta">
                            <?php the_time('d,m,Y')?>
                            | <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
                                <?php the_author(); ?>
                            </a> |
                            <?php if(function_exists('the_views')) {the_views();} ?>
                        </address>
                        <!--.postMeta-->
                        <div class="entry-content category-content">
                            <p class="post-thumb"> <a class="thumb" rel="external" href="<?php the_permalink() ?>">
                                    <?php post_thumbnail( 200,140 ); ?>
                                </a> <?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 300,"……"); ?> </p>
                        </div>
                    </article>
                <?php endwhile; endif;?>
            <div class="content-page">
                <?php par_pagenavi(6); ?>
            </div>
        </div>
        <?php get_sidebar() ;?>
    </div>
<?php get_footer() ;?>