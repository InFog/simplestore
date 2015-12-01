<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Simple Store</title>

        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <link rel="stylesheet" type="text/css" href="/css/ink-flex.min.css">
        <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/css/simplestore.css">

        <!-- load Ink's CSS for IE8 -->
        <!--[if lt IE 9 ]>
            <link rel="stylesheet" href="/css/ink-ie.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
        <![endif]-->

        <script type="text/javascript" src="/js/modernizr.js"></script>
        <script type="text/javascript">
            Modernizr.load({
                test: Modernizr.flexbox,
                nope : '/css/ink-legacy.min.css'
            });
        </script>

        <script type="text/javascript" src="/js/holder.js"></script>
        <script type="text/javascript" src="/js/ink-all.min.js"></script>
        <script type="text/javascript" src="/js/autoload.js"></script>
    </head>
    <body>
        <div class="ink-grid wrap">
            <header class="vertical-space">
                <div class="column-group gutters">
                    <div class="all-66 small-100 tiny-100">
                        <h1><a href="/index.php">Simple Store</a> <small>all the things you need</small></h1>
                    </div>
                    <div class="all-33 small-100 tiny-100 rightalign">
                        <p>
                            <?php echo $cart_products_count; ?> products in the cart<br />
                            Total amount: <?php echo format_price($cart_total_amount); ?><br />
                            <a href="/cart.php"><i class="fa fa-shopping-cart"></i></a>
                        </p>
                        <form class="ink-form" action="/index.php" method="get">
                            <div class="column-group horizontal-gutters">
                                <div class="control-group all-100 small-100 tiny-100">
                                    <div class="control append-button" role="search">
                                        <span><input type="text" name="search" id="search" value="<?php echo get_from_get('search', ''); ?>"></span>
                                        <button class="ink-button">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="all-100 small-100 tiny-100">
                        <nav class="ink-navigation">
                            <ul class="menu horizontal black">
                                <li class="active"><a href="/index.php">Main</a></li>
                                <li><a href="/index.php?category=electronics">Electronics</a></li>
                                <li><a href="/index.php?category=games">Games</a></li>
                                <li><a href="/index.php?category=house">House</a></li>
                                <li><a href="/index.php?category=garden">Garden</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <article>
                <?php echo $content; ?>
            </article>
            <div class="push"></div>
        </div>
        <footer class="clearfix">
            <div class="ink-grid">
                <ul class="unstyled inline half-vertical-space">
                    <li><a href="https://github.com/InFog/simplestore" title="Get the code">Get the code</a></li>
                </ul>
                <p class="note">** None of the products are actually available. This is just a teaching tool.</p>
            </div>
        </footer>
    </body>
</html>
