<!doctype html>
<html lang="en">

<head>
    <title>MasihiSathi - Christian Matrimony Platform</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#f6af04">
    <meta name="description" content="MasihiSathi is a unique matrimonial platform designed exclusively for Christians">
    <meta name="keywords" content="Matrimony, Matrimonial, Marriage, Wedding, Matchmaking, Bride, Groom, Matrimony Services, Matrimonial Site, Online Matrimony, Christian Matrimony, Christian Marriage, Christian Wedding, Christian Matchmaking, Trusted Matrimony, Premium Matrimony, Matrimony Website, Marriage Services, Matrimonial Services, Matrimony Portal, Matrimony Platform">
    <!--== FAV ICON(BROWSER TAB ICON) ==-->
    <meta name="author" content="MasihiSathi">

    <!-- Open Graph Metadata -->
    <meta property="og:title" content="MasihiSathi - Christian Matrimony Platform">
    <meta property="og:description" content="MasihiSathi is a unique matrimonial platform designed exclusively for Christians">
    <meta property="og:image" content="https://www.masihisathi.com/images/MS images/homelogo.png">
    <meta property="og:url" content="https://www.masihisathi.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="MasihiSathi - Christian Matrimony Platform">
    <meta name="twitter:description" content="MasihiSathi is a unique matrimonial platform designed exclusively for Christians">
    <meta name="twitter:image" content="https://www.masihisathi.com/images/MS images/homelogo.png">
    <meta name="twitter:site" content="@MasihiSathi">
    <link rel="shortcut icon" href="images/MS images/homelogo.png" type="image/x-icon">
    <!--== CSS FILES ==-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Consent Modal Styles -->
    <style>
        .consent-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-in-out;
        }
        
        .consent-modal-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(5px);
        }
        
        .consent-modal-content {
            position: relative;
            background: #fff;
            border-radius: 12px;
            max-width: 600px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            z-index: 10000;
            animation: slideUp 0.3s ease-out;
        }
        
        .consent-modal-header {
            padding: 25px 30px;
            border-bottom: 2px solid #f6af04;
            background: linear-gradient(135deg, #f6af04 0%, #f9c74f 100%);
            border-radius: 12px 12px 0 0;
        }
        
        .consent-modal-header h3 {
            margin: 0;
            color: #fff;
            font-size: 24px;
            font-weight: 600;
        }
        
        .consent-modal-body {
            padding: 30px;
        }
        
        .consent-modal-body p {
            margin-bottom: 15px;
            line-height: 1.6;
            color: #333;
            font-size: 15px;
        }
        
        .consent-modal-body ul {
            margin: 15px 0;
            padding-left: 25px;
        }
        
        .consent-modal-body ul li {
            margin-bottom: 10px;
            line-height: 1.6;
            color: #555;
        }
        
        .consent-modal-body a {
            color: #f6af04;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .consent-modal-body a:hover {
            color: #d99a00;
            text-decoration: underline;
        }
        
        .consent-checkbox {
            margin-top: 25px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            border: 2px solid #e9ecef;
        }
        
        .consent-checkbox label {
            display: flex;
            align-items: flex-start;
            cursor: pointer;
            margin: 0;
        }
        
        .consent-checkbox input[type="checkbox"] {
            margin-right: 12px;
            margin-top: 3px;
            width: 20px;
            height: 20px;
            cursor: pointer;
            flex-shrink: 0;
        }
        
        .consent-checkbox span {
            line-height: 1.5;
            color: #333;
            font-size: 14px;
        }
        
        .consent-modal-footer {
            padding: 20px 30px;
            border-top: 1px solid #e9ecef;
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            background: #f8f9fa;
            border-radius: 0 0 12px 12px;
        }
        
        .consent-modal-footer .btn {
            padding: 10px 25px;
            font-size: 16px;
            font-weight: 500;
            border-radius: 6px;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }
        
        .consent-modal-footer .btn-secondary {
            background: #6c757d;
            color: #fff;
        }
        
        .consent-modal-footer .btn-secondary:hover {
            background: #5a6268;
        }
        
        .consent-modal-footer .btn-primary {
            background: #f6af04;
            color: #fff;
        }
        
        .consent-modal-footer .btn-primary:hover {
            background: #d99a00;
        }
        
        .consent-modal-footer .btn-primary:disabled {
            background: #ccc;
            cursor: not-allowed;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        @media (max-width: 768px) {
            .consent-modal-content {
                width: 95%;
                max-height: 95vh;
            }
            
            .consent-modal-header {
                padding: 20px;
            }
            
            .consent-modal-header h3 {
                font-size: 20px;
            }
            
            .consent-modal-body {
                padding: 20px;
            }
            
            .consent-modal-footer {
                padding: 15px 20px;
                flex-direction: column;
            }
            
            .consent-modal-footer .btn {
                width: 100%;
            }
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
          <![endif]-->
</head>
<?php

$menuItems = [
    'Home' => 'index.php',
    'Pricing plans' => 'plans.php',
    "Our Products & Services"=> 'products-services.php',
    'Contact' => 'contact.php',
    'About' => 'about.php',
    'FAQ' => 'faq.php',
    'Download App' => 'download.php',
];
?>
<?php

$footermenuItems = $menuItems + [

    'Privacy Policy' => 'privacy-policy.php',
    'Terms & Conditions' => 'terms-conditions.php',
    'Refund & Cancellation' => 'refund-cancellation.php',
];
?>

<body>
    <!-- PRELOADER -->
    <div id="preloader">
        <div class="plod">
            <span class="lod1"><img src="images/loder/1.png" alt="" loading="lazy"></span>
            <span class="lod2"><img src="images/loder/2.png" alt="" loading="lazy"></span>
            <span class="lod3"><img src="images/loder/3.png" alt="" loading="lazy"></span>
        </div>
    </div>
    <div class="pop-bg"></div>
    <!-- END PRELOADER -->




    <!-- TOP MENU -->
    <div class="head-top">
        <div class="container">
            <div class="row">
                <div class="lhs">
                    <ul>
                        <?php
                        foreach ($menuItems as $title => $url) {
                            echo "<li><a href=\"$url\">$title</a></li>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="rhs">
                    <ul>
                        <li><a href="tel:+91 9960877313"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+91
                                9960877313 </a></li>
                        <li><a href="mailto:hello@masihisathi.com"><i class="fa fa-envelope-o"
                                    aria-hidden="true"></i>&nbsp; hello@masihisathi.com</a></li>
                        <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#https://wa.link/2q4ca7"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END -->

    <!-- MENU POPUP -->
    <div class="menu-pop menu-pop1">
        <span class="menu-pop-clo"><i class="fa fa-times" aria-hidden="true"></i></span>
        <div class="inn">
            <img src="images/MS images/homelogo.png" alt="" loading="lazy" class="logo-brand-only">
            <p><strong>MasihiSathi</strong> is a unique matrimonial platform designed exclusively for
                Christians, rooted in biblical principles of love, trust, and integrity. Our mission is to help
                believers find their
                God-ordained life partners without the interference of middlemen or hidden charges. </p>
            <ul class="menu-pop-info">
                <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i>+919960877313</a></li>
                <li><a href="https://wa.link/2q4ca7"><i class="fa fa-whatsapp"
                            aria-hidden="true"></i>+919960877313</a></li-->
                <li><a href="#!"><i class="fa fa-envelope-o" aria-hidden="true"></i>hello@masihisathi.com</a></li>
                <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i>Nagpur, Maharashtra, India</a></li>
            </ul>
            <div class="menu-pop-help">
                <h4>Support Team</h4>
                <div class="user-pro">
                    <img src="images/MS images/logoMS.png" alt="" loading="lazy">
                </div>
                <div class="user-bio">
                    <h5>Team Member</h5>
                    <span>Your personal advisor</span>
                    <a href="contact.php" class="btn btn-primary btn-sm">Ask your doubts</a>
                </div>
            </div>
            <div class="menu-pop-soci">
                <ul>
                    <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://wa.link/2q4ca7"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END -->

    <!-- CONTACT EXPERT -->
    <div class="menu-pop menu-pop2">
        <span class="menu-pop-clo"><i class="fa fa-times" aria-hidden="true"></i></span>
        <div class="inn">
            <div class="menu-pop-help">
                <h4>Support Team</h4>
                <div class="user-pro">
                    <img src="images/MS images/logoMS.png" alt="" loading="lazy">
                </div>
                <div class="user-bio">
                    <h5>Team Member</h5>
                    <span>Your personal advisor</span>
                    <a href="contact.php" class="btn btn-primary btn-sm">Ask your doubts</a>
                </div>
            </div>
            <div class="menu-pop-soci">
                <ul>
                    <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="https://wa.link/2q4ca7"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>


        </div>
    </div>
    <!-- END -->

    <!-- MAIN MENU -->
    <div class="hom-top">
        <div class="container">
            <div class="row">
                <div class="hom-nav">
                    <!-- LOGO -->
                    <div class="logo">
                        <span class="menu desk-menu">
                            <i></i><i></i><i></i>
                        </span>
                        <a href="index.php" class="logo-brand"><img src="images/MS images/MasihiSathiComlogowebsite.png"
                                alt="" loading="lazy" class="ic-logo"></a>
                    </div>

                    <!-- EXPLORE MENU-->
                    <div class="bl" style="width: 100%;">
                        <ul>
                            <?php
                            foreach ($menuItems as $title => $url) {
                                echo "<li><a href=\"$url\">$title</a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                    <!-- USER PROFILE 
                    
    
                        <!--MOBILE MENU-->
                    <div class="mob-menu">
                        <div class="mob-me-ic">
                            <span class="ser-open mobile-ser">
                                <img src="images/icon/search.svg" alt="">
                            </span>
                            <!--span class="mobile-exprt" data-mob="dashbord">
                                    <img src="images/icon/users.svg" alt="">
                                </span-->
                            <span class="mobile-menu" data-mob="mobile">
                                <img src="images/icon/menu.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <!--END MOBILE MENU-->
                </div>
            </div>
        </div>
    </div>
    <!-- END -->

    <!-- EXPLORE MENU POPUP -->
    <div class="mob-me-all mobile_menu">
        <div class="mob-me-clo"><img src="images/icon/close.svg" alt=""></div>
        <div class="mv-bus">
            <h4><i class="fa fa-globe" aria-hidden="true"></i> EXPLORE CATEGORY</h4>
            <ul>
                <li><a href="plans.php">Join Now</a></li>
            </ul>
            <h4><i class="fa fa-align-center" aria-hidden="true"></i> All Pages</h4>
            <ul>
                <?php
                foreach ($menuItems as $title => $url) {
                    echo "<li><a href=\"$url\">$title</a></li>";
                }
                ?>
            </ul>
            <div class="menu-pop-help">
                <h4>Support Team</h4>
                <div class="user-pro">
                    <img src="images/MS images/logoMS.png" alt="" loading="lazy">
                </div>
                <div class="user-bio">
                    <h5>Team Member</h5>
                    <span>Your personal advisor</span>
                    <a href="contact.php" class="btn btn-primary btn-sm">Ask your doubts</a>
                </div>
            </div>
            <div class="menu-pop-soci">
                <ul>
                    <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://wa.link/2q4ca7"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
    </div>
    <!-- END MOBILE MENU POPUP -->