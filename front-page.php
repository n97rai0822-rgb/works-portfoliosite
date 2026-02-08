<?php get_header(); ?>
        <main class="main">
            <article>
                <header class="article__heder">
                    <?php
                    get_template_part('template-parts/main-bg');
                    ?>
                    <div class="main__visual">
                        <h1 class="main__tittle">
                            <span class="name">
                                <span class="name__parts">N</span>
                                <span class="name__parts">I</span>
                                <span class="name__parts">I</span>
                                <span class="name__parts">J</span>
                                <span class="name__parts">I</span>
                                <span class="name__parts">M</span>
                                <span class="name__parts">A</span>
                                <span class="name__parts">&nbsp</span>
                                <span class="name__parts">R</span>
                                <span class="name__parts">A</span>
                                <span class="name__parts">I</span>
                                <span class="name__parts">C</span>
                                <span class="name__parts">H</span>
                                <span class="name__parts">I</span>
                            </span>
                            <span class="sub__title">
                                <span class="sub__parts">P</span>
                                <span class="sub__parts">O</span>
                                <span class="sub__parts">R</span>
                                <span class="sub__parts">T</span>
                                <span class="sub__parts">F</span>
                                <span class="sub__parts">O</span>
                                <span class="sub__parts">R</span>
                                <span class="sub__parts">I</span>
                                <span class="sub__parts">O </span>
                                <span class="sub__parts">&nbsp</span>
                                <span class="sub__parts">S</span>
                                <span class="sub__parts">I</span>
                                <span class="sub__parts">T</span>
                                <span class="sub__parts">E</span>
                            </span>
                        </h1>
                    </div>
                    <div class="scroll_down" id="type07">
                    <a href="#">
                        <div class="arrow"></div>
                        <div class="arrow"></div>
                        <div class="arrow"></div>
                        <span class="text">Scroll</span>
                    </a>
                    </div>
                </header>
                <?php
                    $args = array(
                    'post_type'      => 'works',
                    'posts_per_page' => -1,
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
                    );

                    $query = new WP_Query($args);
                ?>
                <?php if ( $query->have_posts() ): ?>
                <section id="works" class="works">
                    <h2 class="topic topic--works">Works</h2>
                    <ul class="works__list">
                        <?php while( $query->have_posts() ): $query->the_post(); ?>
                        <li id="post-<?php the_id(); ?>" <?php post_class('works__item'); ?>>
                            <a href="<?php the_permalink(); ?>">
                                <div class='works__imgBox'>
                                    <?php the_post_thumbnail('home_thumb',array('class' => 'works__img')); ?>
                                </div>
                                <div class="works__txt">
                                    <div class="works__title">
                                        <h3 class="works__topic"><?php the_title(); ?></h3>
                                        <?php
                                        $categories = get_the_category();
                                        if (!empty($categories)) :
                                        ?>
                                            <ul class="works__tag">
                                            <?php foreach ($categories as $category) : ?>
                                                <li>
                                                <?php echo esc_html($category->name); ?>
                                                </li>
                                            <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </section>
                <?php endif; ?>
                <section id="about" class="about">
                    <h2 class="topic topic--about">About</h2>
                    <div class="about__content">
                        <div  class="about__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about__img.webp" alt="">
                        </div>
                        <div class="about__txtGroup">
                            <h3 class="about__title">新島 来知<span>Niijima Raichi</span></h3>
                            <p class="about__txt">1998年、沖縄県出身。<br>大学を卒業後、学校の事務職員として３年間勤務しました。<br>ものづくりを通して、誰かの役に立つ仕事がしたいという思いから、Webデザイナーの仕事に興味を持ちました。<br>2024年12月からデジタルハリウッドSTUDIO by LIGに入学し、本格的にWebデザインの勉強を始めました。</p>
                            <a class="btn btn--about" href="<?php echo esc_url( home_url('/profile/') ); ?>">MORE</a>
                        </div>
                    </div>
                </section>
            </article>
        </main>
<?php get_footer(); ?>