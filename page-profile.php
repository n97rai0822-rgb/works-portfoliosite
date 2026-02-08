<?php get_header(); ?>
        <main class="main">
            <article>
                <header class="article__header">
                    <?php
                    get_template_part('template-parts/main-bg');
                    ?>
                    <div class="main__visual">
                        <img class="main__img" src="<?php echo get_theme_file_uri('assets/images/profile__main__img.webp'); ?>" alt="">
                    </div>
                    <h1 class="main__tittle">
                        <span class="title">
                            <span class="title__parts">P</span>
                            <span class="title__parts">r</span>
                            <span class="title__parts">o</span>
                            <span class="title__parts">f</span>
                            <span class="title__parts">i</span>
                            <span class="title__parts">l</span>
                            <span class="title__parts">e</span>
                        </span>
                    </h1>
                </header>
                <section class="about">
                    <h2 class="topic topic--about">About</h2>
                    <div class="about__content fadeIn">
                        <div  class="about__img">
                            <img src="<?php echo get_theme_file_uri('assets/images/about__img.webp'); ?>" alt="">
                        </div>
                        <div class="about__txtGroup">
                            <h3 class="about__title">新島 来知<span>Niijima Raichi</span></h3>
                            <p class="about__txt">1998年、沖縄県出身。<br>大学を卒業後、学校の事務職員として３年間勤務しました。<br>ものづくりを通して、誰かの役に立つ仕事がしたいという思いから、Webデザイナーの仕事に興味を持ちました。<br>2024年12月からデジタルハリウッドSTUDIO by LIGに入学し、本格的にWebデザインの勉強を始めました。</p>
                        </div>
                    </div>
                </section>
                <section class="strengths">
                    <h2 class="topic topic--strengths">Strengths</h2>
                    <ul class="strengths__list">
                        <li class="strengths__item fadeIn">
                            <img class="strength__num" src="<?php echo get_theme_file_uri('assets/images/strength__num__01.png'); ?>" alt="">
                            <img class="strengths__img" src="<?php echo get_theme_file_uri('assets/images/icon__01.png'); ?>" alt="丁寧・親切さを表すアイコン">
                            <h3 class="strengths__title">誠実・丁寧な対応</h3>
                            <p class="strengths__txt">学校事務や現職での接客業務の中で、相手に寄り添った丁寧な対応を身につけました。<br>また、常日頃から相手に信頼してもらうにはどうしたらいいか、安心して業務を任せてもらうにどうしたらいいかを意識して、誠実に物事に取り組んでいます。</p>
                        </li>
                        <li class="strengths__item fadeIn">
                            <img class="strength__num" src="<?php echo get_theme_file_uri('assets/images/strength__num__02.png'); ?>" alt="">
                            <img class="strengths__img" src="<?php echo get_theme_file_uri('assets/images/icon__02.png'); ?>" alt="探求心を表すアイコン">
                            <h3 class="strengths__title">探究心</h3>
                            <p class="strengths__txt">何かを取り組むにあたって、「なぜそうなるのか」「本質は何なのか」を突き詰めて、できる限り理解した上で取り組むように心がけています。<br>デザインについても日々探求し続け、何のため、誰のためのデザインなのかを言語化して説明できるデザイナーを目指しています。</p>
                        </li>
                        <li class="strengths__item fadeIn">
                            <img class="strength__num" src="<?php echo get_theme_file_uri('assets/images/strength__num__03.png'); ?>" alt="">
                            <img class="strengths__img" src="<?php echo get_theme_file_uri('assets/images/icon__03.png'); ?>" alt="継続力を表すアイコン">
                            <h3 class="strengths__title">継続力</h3>
                            <p class="strengths__txt">目標に向かって継続して取り組むことができます。<br>これまで、部活動や勉強など時には苦しい場面もありましたが、最後までやり遂げてきました。<br>これからも、デザインやWeb分野に関する学習を継続し、お客様の役に立てるよう努力します。</p>
                        </li>
                    </ul>
                </section>
                <section class="skills">
                    <h2 class="topic topic--skills">Skills</h2>
                    <div class="skills__content fadeIn">
                        <ul class="skills__list">
                            <li class="skills__item skills__item--01">
                                <div class="skills__txtGroup">
                                    <h3 class="skills__cat">Web　<br class="tabBr">Design</h3>
                                    <p class="skills__txt">Webサイトやバナーなどのデザインを制作できます。<br>お客様の抱える課題や悩みの解決を手助けできるようなデザインやUI/UXに配慮したデザインを心がけています。</p>
                                </div>
                                <ul class="skills__tagList">
                                    <li class="skills__tagItem">Illustrator</li>
                                    <li class="skills__tagItem">Photoshop</li>
                                    <li class="skills__tagItem">Figma</li>
                                </ul>
                            </li>
                            <li class="skills__item skills__item--02">
                                <div class="skills__txtGroup">
                                    <h3 class="skills__cat">Web　<br class="tabBr">Development</h3>
                                    <p class="skills__txt">デザインカンプを忠実に再現し、レスポンシブに対応したコーディングができます。また、基礎的なJavaScriptを用いた動的サイトの作成やWordpressなどのノーコードツールでのサイト作成も可能です。</p>
                                </div>
                                <ul class="skills__tagList">
                                    <li class="skills__tagItem">HTML</li>
                                    <li class="skills__tagItem">CSS</li>
                                    <li class="skills__tagItem">JavaScript(jQUery)</li>
                                    <li class="skills__tagItem">Wordpress</li>
                                </ul>
                            </li>
                        </ul>
                </section>
                <section class="persHR">
                    <h2 class="topic topic--persHR">Personal<br>History</h2>
                    <ul class="persHR__list">
                        <li class="persHR__item fadeIn">
                            <time class="persHR__date" datetime="2011-04">2011.04</time>
                            <h3  class="persHR__title">部活動に明け暮れる日々</h3>
                            <p class="persHR__txt">学生時代はサッカー部に所属し、部活動を中心とした生活を送った。<br>時にはハードな練習を通して、忍耐力を身につけることがでた。</p>
                        </li>
                        <li class="persHR__item fadeIn">
                            <time class="persHR__date" datetime="2017-04">2017.04</time>
                            <h3  class="persHR__title">探求することの楽しさを学んだ大学時代</h3>
                            <p class="persHR__txt">大学では、日本語学と琉球語学を専攻した。<br>言語学の勉強や卒論研究をと通して、物事を探求する楽しさに気づく。</p>
                        </li>
                        <li class="persHR__item fadeIn">
                            <time class="persHR__date" datetime="2022-04">2022.04</time>
                            <h3  class="persHR__title">学校事務職員として勤務</h3>
                            <p class="persHR__txt">学校事務職員として、学校運営に関わる給与計算、歳出業務、補助金事務、窓口対応など幅広く担当。<br>生徒や保護者、教職員を陰ながら出助けできることにやりがいを感じつつも、「何かものづくりを通して、誰かの役に立ちたい」「日々、知識やスキルを磨いて、それを活かせる仕事がしたい」という憧れを抱くようになる。</p>
                        </li>
                        <li class="persHR__item fadeIn">
                            <time class="persHR__date" datetime="2011-04">2024.12</time>
                            <h3  class="persHR__title">デジタルハリウッド by LIG に入学</h3>
                            <p class="persHR__txt">偶然読んだ本からWebデザインの仕事に興味を持ち、独学でHTML/CSSの勉強を始め、Webデザインの面白さを知る。<br>Web業界への転職を決意し、Webデザインの学習のため、デジタルハリウッド by LIG に入学。</p>
                        </li>
                        <li class="persHR__item fadeIn">
                            <time class="persHR__date" datetime="2025-03">2025.03</time>
                            <h3  class="persHR__title">本格的にWebデザインの学習を開始</h3>
                            <p class="persHR__txt">2025年3月末に学校事務を退職し、本格的にWebデザインの学習を開始。<br>現在はアルバイトをしながら、Web業界への転職活動中。</p>
                        </li>
                    </ul>
                </section>
            </article>
        </main>
<?php get_footer(); ?>