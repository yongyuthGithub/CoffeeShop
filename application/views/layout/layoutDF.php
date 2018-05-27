<!DOCTYPE HTML>
<!--
        Escape Velocity by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Coffee Shop</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->

        <?php echo css_asset('master/main.css') ?>
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body class="left-sidebar">
        <div id="page-wrapper">

            <!-- Header -->
            <div id="header-wrapper" class="wrapper">
                <div id="header">

                    <!-- Logo -->
                    <div id="logo">
                        <h1><a href="<?php echo base_url('Welcome'); ?>">Coffee Shop</a></h1>
                        <p>Order Management, Redeem Points and Online Checkpoints.</p>
                    </div>

                    <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li class="current"><a href="<?php echo base_url('Welcome'); ?>">Home</a></li>
                            <li>
                                <a href="#">Transaction</a>
                                <ul>
                                    <li><a href="<?php echo base_url('CoffeeList'); ?>">Coffee List</a></li>
                                    <li><a href="<?php echo base_url('OrderList'); ?>">Order List</a></li>
                                    <li><a href="<?php echo base_url('OrderHistory'); ?>">Order History</a></li>
                                    <li><a href="<?php echo base_url('PointHistory'); ?>">Point history</a></li>
                                    <!--                                    <li>
                                                                            <a href="#">Sed consequat</a>
                                                                            <ul>
                                                                                <li><a href="#">Lorem dolor</a></li>
                                                                                <li><a href="#">Amet consequat</a></li>
                                                                                <li><a href="#">Magna phasellus</a></li>
                                                                                <li><a href="#">Etiam nisl</a></li>
                                                                                <li><a href="#">Sed feugiat</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="#">Nisl tempus</a></li>-->
                                </ul>
                            </li>
                            <li>
                                <a href="#">Setting</a>
                                <ul>
                                    <li><a href="<?php echo base_url('ProductList'); ?>">Product List</a></li>
                                    <li><a href="<?php echo base_url('Condition'); ?>">Condition</a></li>
                                    <li><a href="<?php echo base_url('User'); ?>">User</a></li>
                                    <li><a href="<?php echo base_url('ProfileManagement'); ?>">Profile Management</a></li>
                                </ul>
                            </li>
                            <!--<li><a href="left-sidebar.html">Left Sidebar</a></li>-->
                            <!--<li><a href="right-sidebar.html">Setting</a></li>-->
                            <li><a href="no-sidebar.html">Login / Logout</a></li>
                        </ul>
                    </nav>

                </div>
            </div>

            <!-- Intro -->
            <?php $this->load->view($page); ?>

            <!-- Basket -->
            <div id="intro-wrapper" class="wrapper style3">
                <div class="title">Basket</div>
                <section id="intro" class="container">

                </section>
            </div>

            <!-- Footer -->
            <div id="footer-wrapper" class="wrapper">
                <div class="title">Contact a coffee shop</div>
                <div id="footer" class="container">
                    <header class="style1">
                        <h2>If you want to inquire. Or various problems?</h2>
                        <p>
                            1. Specify your name.<br />
                            2. Specify the email to contact.<br />
                            3. Identify problems or issues.<br />
                            4. And send the question by pressing the send button.
                        </p>
                    </header>
                    <hr />
                    <div class="row 150%">
                        <div class="6u 12u(mobile)">

                            <!-- Contact Form -->
                            <section>
                                <form method="post" action="#">
                                    <div class="row 50%">
                                        <div class="6u 12u(mobile)">
                                            <input type="text" name="name" id="contact-name" placeholder="Name" />
                                        </div>
                                        <div class="6u 12u(mobile)">
                                            <input type="text" name="email" id="contact-email" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="row 50%">
                                        <div class="12u">
                                            <textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="12u">
                                            <ul class="actions">
                                                <li><input type="submit" class="style1" value="Send" /></li>
                                                <li><input type="reset" class="style2" value="Reset" /></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </section>

                        </div>
                        <div class="6u 12u(mobile)">

                            <!-- Contact -->
                            <section class="feature-list small">
                                <div class="row">
                                    <div class="6u 12u(mobile)">
                                        <section>
                                            <h3 class="icon fa-home">Mailing Address</h3>
                                            <p>
                                                Untitled Corporation<br />
                                                1234 Somewhere Rd #987<br />
                                                Nashville, TN 00000-0000
                                            </p>
                                        </section>
                                    </div>
                                    <div class="6u 12u(mobile)">
                                        <section>
                                            <h3 class="icon fa-comment">Social</h3>
                                            <p>
                                                <a href="#">@untitled-corp</a><br />
                                                <a href="#">linkedin.com/untitled</a><br />
                                                <a href="#">facebook.com/untitled</a>
                                            </p>
                                        </section>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="6u 12u(mobile)">
                                        <section>
                                            <h3 class="icon fa-envelope">Email</h3>
                                            <p>
                                                <a href="#">info@untitled.tld</a>
                                            </p>
                                        </section>
                                    </div>
                                    <div class="6u 12u(mobile)">
                                        <section>
                                            <h3 class="icon fa-phone">Phone</h3>
                                            <p>
                                                (000) 555-0000
                                            </p>
                                        </section>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                    <hr />
                </div>
                <div id="copyright">
                    <ul>
                        <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Scripts -->
        <?php echo js_asset('master/jquery.min.js') ?>
        <?php echo js_asset('master/jquery.dropotron.min.js') ?>
        <?php echo js_asset('master/skel.min.js') ?>
        <?php echo js_asset('master/skel-viewport.min.js') ?>
        <?php echo js_asset('master/util.js') ?>
        <?php echo js_asset('master/main.js') ?>
    </body>
</html>