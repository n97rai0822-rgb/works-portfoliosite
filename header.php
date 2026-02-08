<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <?php wp_head(); ?>
    <!-- web font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
    (function(d) {
        var config = {
        kitId: 'nrz6qhf',
        scriptTimeout: 3000,
        async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
    </script>
    <!-- css -->
</head>
<body>
<?php wp_body_open(); ?>
    <div class="container">
        <header class="header">
            <div id="mask"></div>
            <nav class="nav">
                <div class="toggle_btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <?php
                    if ( is_front_page() ) {
                    $menu = 'global-nav-home';
                    } elseif ( is_singular('works') ) {
                    $menu = 'global-nav-works';
                    } elseif ( is_page('profile') ) {
                    $menu = 'global-nav-profile';
                    }

                    wp_nav_menu(array(
                    'menu'       => $menu,
                    'container'  => false,
                    'menu_class' => 'nav__list'
                    ));
                    ?>
            </nav>
        </header>