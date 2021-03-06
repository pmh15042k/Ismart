<!DOCTYPE html>
<html>

<head>
    <title>ISMART STORE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= site_url("/public/css/bootstrap/bootstrap-theme.min.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= site_url("/public/css/bootstrap/bootstrap.min.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= site_url("/public/reset.css") ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="<?= site_url("/public/css/carousel/owl.carousel.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= site_url("/public/css/carousel/owl.theme.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= site_url("/public/css/font-awesome/css/font-awesome.min.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= site_url("/public/style.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= site_url("/public/responsive.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= site_url("/public/css/jquery-ui.css") ?>" rel="stylesheet" type="text/css" />

    <script src="<?= site_url("/public/js/jquery-2.2.4.min.js") ?>" type="text/javascript"></script>
    <script src="<?= site_url("/public/js/jquery-ui.js") ?>" type="text/javascript"></script>
    <script src="<?= site_url("/public/js/elevatezoom-master/jquery.elevatezoom.js") ?>" type="text/javascript"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?= site_url("/public/js/bootstrap/bootstrap.min.js") ?>" type="text/javascript"></script>
    <script src="<?= site_url("/public/js/jquery.validate.min.js") ?>" type="text/javascript"></script>
    <script src="<?= site_url("/public/js/carousel/owl.carousel.js") ?>" type="text/javascript"></script>
    <script src="<?= site_url("/public/js/main.js") ?>" type="text/javascript"></script>
    <script src="<?= site_url("/public/js/ajax.js") ?>" type="text/javascript"></script>
</head>

<body>
    <div id="site">
        <div id="container">
            <div id="header-wp">
                <div id="head-top" class="clearfix">
                    <div class="wp-inner">
                        <a href="" title="" id="payment-link" class="fl-left">H??nh th???c thanh to??n</a>
                        <div id="main-menu-wp" class="fl-right">
                            <ul id="main-menu" class="clearfix">
                                <!-- =========== PAGE============================= -->
                                <?php if (isset($data['list_page'])) {
                                    foreach ($data['list_page'] as $page) { ?>
                                        <li>
                                            <a href="<?= $page['page_link'] ?>" title=""><?= $page["page_title"] ?></a>
                                        </li>
                                <?php
                                    }
                                }

                                ?>
                                <!-- ==============END PAGE======================= -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="head-body" class="clearfix">
                    <div class="wp-inner">
                        <a href="<?= site_url("") ?>" title="" id="logo" class="fl-left"><img src="<?= site_url("/public/images/logo.png") ?>" /></a>

                        <div id="search-wp" class="fl-left">
                            <form id="form-search" method="POST" action="">
                                <input type="text" name="s" id="s" placeholder="Nh???p t??? kh??a t??m ki???m t???i ????y!">
                                <button type="button" id="sm-s">T??m ki???m</button>
                            </form>
                            <div id="search-result">



                            </div>
                        </div>
                        <div id="action-wp" class="fl-right">
                            <div id="advisory-wp" class="fl-left">
                                <span class="title">T?? v???n</span>
                                <span class="phone">0987.654.321</span>
                            </div>
                            <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            <a href="?page=cart" title="gi??? h??ng" id="cart-respon-wp" class="fl-right">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span id="num">2</span>
                            </a>
                            <div id="cart-wp" class="fl-right">
                                <div id="btn-cart">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <?php if (get_num_od() > 0) { ?>
                                        <span id="num"><?php echo get_num_od() ?></span>
                                    <?php }
                                    ?>

                                </div>
                                <div id="dropdown">
                                    <?php

                                    if (isset($_SESSION['cart']) && get_num_od() > 0) {
                                        $list_cart = get_list_buy_cart();
                                        $total = get_total_cart();
                                        if (!empty($list_cart)) {
                                    ?>
                                            <p class="desc">C?? <span><?= count($_SESSION['ismart']['cart']['buy']) ?> s???n ph???m</span> trong gi??? h??ng</p>
                                            <ul class="list-cart">
                                                <?php foreach ($list_cart as $item) { ?>
                                                    <li class="clearfix">
                                                        <a href="" title="" class="thumb fl-left">
                                                            <img src="<?= site_url("/public/images/" . $item['product_thumb'] . "") ?>" alt="">
                                                        </a>
                                                        <div class="info fl-right">
                                                            <a href="" title="" class="product-name"><?= $item['product_title'] ?></a>
                                                            <p class="price"><?= current_format($item['price'], '??') ?></p>
                                                            <p class="qty">S??? l?????ng: <span><?= $item['qty'] ?></span></p>
                                                        </div>
                                                    </li>
                                                <?php } ?>

                                            </ul>
                                            <div class="total-price clearfix">
                                                <p class="title fl-left">T???ng:</p>
                                                <p class="price fl-right"><?= current_format($total, '??') ?></p>
                                            </div>
                                            <dic class="action-cart clearfix">
                                                <a href="<?= site_url("/cart") ?>" title="Gi??? h??ng" class="view-cart fl-left">Gi??? h??ng</a>
                                                <a href="<?= site_url("/checkout") ?>" title="Thanh to??n" class="checkout fl-right">Thanh to??n</a>
                                            </dic>
                                        <?php }
                                    } else { ?>
                                        <p class="desc">Kh??ng c?? s???n ph???m trong gi??? h??ng.</p>

                                    <?php

                                    }
                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>