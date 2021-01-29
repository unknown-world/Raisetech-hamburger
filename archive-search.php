<?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
            <section class="cl-contents p-hero p-hero--archive">
                <h1 class="c-ttl">Search:<span>チーズバーガー</span></h1>      
            </section>
            <section class="p-summary l-contents">
                <h2 class="p-summary__ttl">見出しが入ります</h2>
                <p class="p-summary__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </section>
            <?php
                if( have_posts() ) :
                    while( have_posts() ) :
                        the_post(); ?>
                        <section class="p-menu l-contents" id="post-<?php the_ID(); //投稿ID?>" <?php post_class(); //生成するページによってclassを付与する?>>
                            <picture class="p-menu__img">
                                <?php the_post_thumbnail() //設定されているときはアイキャッチ画像を表示?>
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img.png">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img-md.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/menu_img-sm.png">
                            </picture>
                            <div class="p-menu__contents">
                                <h3 class="p-menu__ttl"><?php the_title(); //投稿タイトルを表示?></h3>
                                    <?php $content_string = get_the_content('<a href=" the_permalink(); " class="c-button u-button">詳しく見る</a>');//投稿本文の一部のプレビュー、引数で「さらに...」を「詳しく見る」に置き換える 
                                    $content_string = str_replace('<p','<p class="p-menu__description" ',$content_string);
                                    $content_string = str_replace('<h1','<h1 class="p-menu__description" ',$content_string);
                                    $content_string = str_replace('<h2','<h2 class="p-menu__description" ',$content_string);
                                    $content_string = str_replace('<h3','<h3 class="p-menu__description" ',$content_string);
                                    $content_string = str_replace('<h4','<h4 class="p-menu__description" ',$content_string);
                                    $content_string = str_replace('<h5','<h5 class="p-menu__description" ',$content_string);
                                    $content_string = str_replace('<h6','<h6 class="p-menu__description" ',$content_string);
                                    echo $content_string; //p,h1-h6タグにクラス名を付け、スタイルを適用する?>
                            </div>
                        </section>
                        <?php endwhile; ?>
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;//現在のページ送り番号を取得する
                    $pages = $wp_query->max_num_pages;//総ページ数を取得する
                    $args = array(
                        'mid_size' => 4,// 左右にそれぞれ表示するページ番号の数
                        'prev_text' => '&lt;&lt;',// 前のリンクテキスト
                        'next_text' => '&gt;&gt;',// 次のリンクテキスト
                        'screen_reader_text' => 'page&nbsp;'.$paged.'/'.$pages.'&nbsp;',// ナビゲーションのヘッダーテキスト
                    );
                    the_posts_pagination($args); //ページネーションを表示する?>
                <?php else ://記事がなかったときの表示内容?>
                    <p class="l-contents">表示する記事がありません</p>
                <?php endif;?>
            <!--
            <section class="p-menu l-contents">
                <picture class="p-menu__img">
                    <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img.png">
                    <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img-md.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu_img-sm.png">
                </picture>
                <div class="p-menu__contents">
                    <h3 class="p-menu__ttl">見出しが入ります</h3>
                    <h4 class="p-menu__sub-ttl">小見出しが入ります</h4>
                    <p class="p-menu__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <a href="#" class="c-button u-button">詳しく見る</a>
                </div>
            </section>
            <section class="p-menu l-contents">
                <picture class="p-menu__img">
                    <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img.png">
                    <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img-md.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu_img-sm.png">
                </picture>
                <div class="p-menu__contents">
                    <h3 class="p-menu__ttl">見出しが入ります</h3>
                    <h4 class="p-menu__sub-ttl">小見出しが入ります</h4>
                    <p class="p-menu__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <a href="#" class="c-button u-button">詳しく見る</a>
                </div>
            </section>
            <section class="p-menu l-contents">
                <picture class="p-menu__img">
                    <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img.png">
                    <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img-md.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu_img-sm.png">
                </picture>
                <div class="p-menu__contents">
                    <h3 class="p-menu__ttl">見出しが入ります</h3>
                    <h4 class="p-menu__sub-ttl">小見出しが入ります</h4>
                    <p class="p-menu__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <a href="#" class="c-button u-button">詳しく見る</a>
                </div>
            </section>
            <section class="p-menu l-contents">
                <picture class="p-menu__img">
                    <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img.png">
                    <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img-md.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu_img-sm.png">
                </picture>
                <div class="p-menu__contents">
                    <h3 class="p-menu__ttl">見出しが入ります</h3>
                    <h4 class="p-menu__sub-ttl">小見出しが入ります</h4>
                    <p class="p-menu__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <a href="#" class="c-button u-button">詳しく見る</a>
                </div>
            </section>
            <section class="p-menu l-contents">
                <picture class="p-menu__img">
                    <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img.png">
                    <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img-md.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu_img-sm.png">
                </picture>
                <div class="p-menu__contents">
                    <h3 class="p-menu__ttl">見出しが入ります</h3>
                    <h4 class="p-menu__sub-ttl">小見出しが入ります</h4>
                    <p class="p-menu__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <a href="#" class="c-button u-button">詳しく見る</a>
                </div>
            </section>-->
        </div>
        <?php get_sidebar(); //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）?>
    </div>
<?php get_footer(); //footer.phpを読み込むテンプレートタグ（インクルードタグ）?>