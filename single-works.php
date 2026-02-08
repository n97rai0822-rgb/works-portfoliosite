<?php get_header(); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <main class="main">
            <header class="article__header">
                <div class="main__topic">
                    <h1 class="main__title"><?php the_title(); ?></h1>
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) :
                    ?>
                    <ul class="main__tag">
                    <?php foreach ($categories as $category) : ?>
                        <li>
                        <?php echo esc_html($category->name); ?>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <div class="main__visual <?php if (in_category('バナー')) echo 'is-banner'; ?>">
                    <?php the_post_thumbnail('works_thumb',array('class' => 'main__img')); ?>
                </div>
            </header>
            <section class="works">
                <ul class="works__list">
                    <li class="works__item">
                        <p class="works__topic">制作概要</p>
                        <p class="works__txt"><?php echo nl2br(esc_html(get_field('overview'))); ?></p>
                    </li>
                    <li class="works__item">
                        <p class="works__topic">課題</p>
                        <p class="works__txt"><?php echo nl2br(esc_html(get_field('issue'))); ?></p>
                    </li>
                    <li class="works__item">
                        <p class="works__topic">目的</p>
                        <p class="works__txt"><?php echo nl2br(esc_html(get_field('purpose'))); ?></p>
                    </li>
                    <li class="works__item">
                        <p class="works__topic">ターゲット</p>
                        <p class="works__txt"><?php echo nl2br(esc_html(get_field('target'))); ?></p>
                    </li>
                    <li class="works__item">
                        <p class="works__topic">情報設計</p>
                        <p class="works__txt"><?php echo nl2br(esc_html(get_field('architecture'))); ?></p>
                    </li>
                    <li class="works__item">
                        <p class="works__topic">デザイン</p>
                        <p class="works__txt"><?php echo nl2br(esc_html(get_field('design'))); ?></p>
                    </li>
                    <li class="works__item">
                        <p class="works__topic">制作期間</p>
                        <p class="works__txt"><?php echo nl2br(esc_html(get_field('production'))); ?></p>
                    </li>
                    <li class="works__item">
                        <p class="works__topic">使用ツール</p>
                        <p class="works__txt">
                            <?php
                                $tools = get_field('tool');
                                if ($tools && is_array($tools)) {
                                    echo esc_html(implode(' / ', $tools));
                                }
                            ?>
                        </p>
                    </li>
                    <?php 
                    $sourcecode = get_field('sourcecode');       // GitHub ソースコードURL
                    $githubpages = get_field('githubpages');   // GitHub Pages URL

                    // どちらか1つでもあれば表示
                    if ($sourcecode || $githubpages) : ?>
                    <li class="works__item">
                        <p class="works__topic">ソースコード</p>
                        <p class="works__txt">
                            <?php if ($sourcecode) : ?>
                                <span>GitHubリポジトリ：</span>
                                <a href="<?php echo esc_url($sourcecode); ?>" 
                                target="_blank" rel="noopener"
                                style="color: #0066cc; text-decoration: underline;">
                                    <?php echo esc_html($sourcecode); ?>
                                </a>
                                <br>
                            <?php endif; ?>

                            <?php if ($githubpages) : ?>
                                <span>GitHub Pages：</span>
                                <a href="<?php echo esc_url($githubpages); ?>" 
                                target="_blank" rel="noopener"
                                style="color: #0066cc; text-decoration: underline;">
                                    <?php echo esc_html($githubpages); ?>
                                </a>
                            <?php endif; ?>
                        </p>
                    </li>
                    <?php endif; ?>
                </ul>
            </section>
            <?php
            // ACF画像フィールドを取得（戻り値：配列）
            $capture_pc_01 = get_field('capture_pc_01');
            $capture_sp_01 = get_field('capture_sp_01');
            $capture_others = get_field('capture_others');

            // capture_pc_01 または capture_sp_01 に値がある場合
            if ( !empty($capture_pc_01) || !empty($capture_sp_01) ) {
                get_template_part('template-parts/works-capture01');
            }

            // capture_others に値がある場合
            if ( !empty($capture_others) ) {
                get_template_part('template-parts/works-capture02');
            }
            ?>
            <section class="more">
                <h2 class="topic topic--more">More Works</h2>
                <ul class="more__list">
                    <?php
                        $args = array(
                        'post_type'      => 'works',
                        'posts_per_page' => 8,
                        'post__not_in'   => array(get_the_ID()), // 現在の投稿を除外
                        );

                        $more_query = new WP_Query($args);

                        if ($more_query->have_posts()) :
                        while ($more_query->have_posts()) :
                            $more_query->the_post();
                        ?>
                            <li class="more__item">
                                <a href="<?php the_permalink(); ?>">

                                <div class='more__imgBox'>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('more_works_thumb',array('class' => 'more__img')); ?>
                                    <?php endif; ?>
                                </div>

                                <div class="txt__box">
                                    <h4 class="more__title"><?php the_title(); ?></h4>

                                    <ul class="more__tag">
                                        <?php
                                            $categories = get_the_category();
                                            if ($categories) :
                                                foreach ($categories as $category) :
                                            ?>
                                                <li><?php echo esc_html($category->name); ?></li>
                                            <?php
                                                endforeach;
                                            endif;
                                            ?>
                                    </ul>
                                    <p class="more__skill">デザイン／コーディング</p>
                                </div>
                                </a>
                            </li>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        endif;
                        ?>
                </ul>
            </section>
        </main>
        <?php endwhile; endif; ?>
<?php get_footer(); ?>