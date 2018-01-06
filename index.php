<?php
$data = require 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lets' Rock</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="fonts/awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="flexslider/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header class="header">
    <nav>
        <ul class="nav-list">
            <?php
            foreach ($data ['mainMenu'] as $menuItem) {
                ?>
                <li class="nav-item">
                    <a href="<?php echo $menuItem['url']; ?>" class="<?php echo $menuItem['class']; ?>">
                        <?php echo $menuItem['title']; ?>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
        <a class="logo-nav" href="#">
            <img src="<?php echo $data['siteLogo']; ?>" class="<?php echo $data['logoClass']; ?>" alt="Logo">
        </a>
        <ul class="social-list">
            <?php
            foreach ($data ['socialLinks'] as $socItem) {
                ?>
                <li class="social-item">
                    <a href="<?php echo $socItem['url']; ?>" class="<?php echo $socItem['class']; ?>">
                        <i class="<?php echo $socItem['fontClass']; ?>" aria-hidden="true"></i>
                        <?php echo $socItem['count']; ?>
                    </a>
                </li>
                <?php
            }
            ?>
            <li class="social-item">
                <a href="<?php echo $data['buttonBuy']['url']; ?>" class="<?php echo $data['buttonBuy']['class']; ?>">
                    <?php echo $data['buttonBuy']['title']; ?>
                </a>
            </li>
        </ul>
    </nav>
</header>
<section class="promo-slider">
    <div class="flexslider">
        <ul class="slides">
            <?php
            foreach ($data ['promoSlider'] as $promoSlide) {
                ?>
                <li class="<?php echo $promoSlide['class']; ?>">
                    <div class="<?php echo $promoSlide['contentContainer']; ?>">
                        <h1 class="<?php echo $promoSlide['headerClass']; ?>">
                            <?php echo $promoSlide['headerTitle']; ?>
                            <span class="<?php echo $promoSlide['subheadClass']; ?>">
                                <?php echo $promoSlide['subheadTitle']; ?>
                            </span>
                        </h1>
                        <a class="<?php echo $promoSlide['mainButtonClass']; ?>"
                           href="<?php echo $promoSlide['url']; ?>"><?php echo $promoSlide['mainButton']; ?></a>
                    </div>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</section>
<section class="introducing">
    <div class="container">
        <div class="<?php echo $data ['sectionHeader'] ['class'] ?>">
            <h2 class="<?php echo $data ['sectionHeader'] ['headerClass'] ?>">
                <?php echo $data ['headers'] ['headerIntro'] ?>
                <span class="<?php echo $data ['sectionHeader'] ['spanClass'] ?>">
                <?php echo $data ['headers'] ['spanIntro'] ?>
                </span>
            </h2>
        </div>
        <div class="<?php echo $data ['introControls'] ['controlsContainer'] ?>">
            <a class="<?php echo $data ['introControls'] ['controlLeft'] ?>" href="#"><i
                        class="<?php echo $data ['introControls'] ['fontArrowLeft'] ?>" aria-hidden="true"></i></a>
            <a class="<?php echo $data ['introControls'] ['controlRight'] ?>" href="#"><i
                        class="<?php echo $data ['introControls'] ['fontArrowRight'] ?>" aria-hidden="true"></i></a>
        </div>
        <div class="flexslider2">
            <ul class="slides">
                <li>
                    <ul class="group">
                        <?php
                        foreach ($data ['introducingSlider'] as $introSlide) {
                            ?>
                            <li class="<?php echo $introSlide['containerClass']; ?>">
                                <img src="<?php echo $introSlide['imgUrl']; ?>"
                                     class="<?php echo $introSlide['imgClass']; ?>"
                                     alt="<?php $introSlide['imgAlt']; ?>">
                                <div class="musician-info-active">
                                    <h3 class="musician-head"><?php echo $introSlide ['musicianName']; ?></h3>
                                    <p class="musician-subhead"><?php echo $introSlide ['musicianSubhead']; ?></p>
                                    <ul class="player-social-list">
                                        <li class="player-social-item">
                                            <a class="social" href="<?php echo $introSlide ['faceLinkUrl'] ?>"><i
                                                        class="<?php echo $introSlide ['socialFace'] ?>"
                                                        aria-hidden="true"></i> <?php echo $introSlide ['faceCounter'] ?>
                                            </a>
                                        </li>
                                        <li class="player-social-item">
                                            <a class="social" href="<?php echo $introSlide ['twitLinkUrl'] ?>"><i
                                                        class="<?php echo $introSlide ['socialTwit'] ?>"
                                                        aria-hidden="true"></i> <?php echo $introSlide ['twitCounter'] ?>
                                            </a>
                                        </li>
                                        <li class="player-social-item">
                                            <a class="social" href="<?php echo $introSlide ['googLinkUrl'] ?>"><i
                                                        class="<?php echo $introSlide ['socialGoog'] ?>"
                                                        aria-hidden="true"></i><?php echo $introSlide ['googCounter'] ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>

                </li>
                <li>
                    <ul class="group">
                        <?php foreach ($data ['introducingSlider'] as $introSlide) {
                            ?>
                            <li class="<?php echo $introSlide['containerClass']; ?>">
                                <img src="<?php echo $introSlide['imgUrl']; ?>"
                                     class="<?php echo $introSlide['imgClass']; ?>"
                                     alt="<?php $introSlide['imgAlt']; ?>">
                                <div class="musician-info-active">
                                    <h3 class="musician-head"><?php echo $introSlide ['musicianName']; ?></h3>
                                    <p class="musician-subhead"><?php echo $introSlide ['musicianSubhead']; ?></p>
                                    <ul class="player-social-list">
                                        <li class="player-social-item">
                                            <a class="social" href="<?php echo $introSlide ['faceLinkUrl'] ?>"><i
                                                        class="<?php echo $introSlide ['socialFace'] ?>"
                                                        aria-hidden="true"></i> <?php echo $introSlide ['faceCounter'] ?>
                                            </a>
                                        </li>
                                        <li class="player-social-item">
                                            <a class="social" href="<?php echo $introSlide ['twitLinkUrl'] ?>"><i
                                                        class="<?php echo $introSlide ['socialTwit'] ?>"
                                                        aria-hidden="true"></i> <?php echo $introSlide ['twitCounter'] ?>
                                            </a>
                                        </li>
                                        <li class="player-social-item">
                                            <a class="social" href="<?php echo $introSlide ['googLinkUrl'] ?>"><i
                                                        class="<?php echo $introSlide ['socialGoog'] ?>"
                                                        aria-hidden="true"></i><?php echo $introSlide ['googCounter'] ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="upcoming-videos">
    <div class="container">
        <div class="upcoming-head">
            <div class="<?php echo $data ['sectionHeader'] ['class'] ?>">
                <h2 class="<?php echo $data ['sectionHeader'] ['headerClass'] ?>">
                    <?php echo $data ['headers'] ['headerUpcoming'] ?>
                    <span class="<?php echo $data ['sectionHeader'] ['spanClass'] ?>">
                <?php echo $data ['headers'] ['spanUpcoming'] ?>
                </span>
                </h2>
            </div>
            <div>
                <div class="<?php echo $data ['sectionHeader'] ['class'] ?>">
                    <h2 class="<?php echo $data ['sectionHeader'] ['headerClass'] ?>">
                        <?php echo $data ['headers'] ['headerVideo'] ?>
                        <span class="<?php echo $data ['sectionHeader'] ['spanClass'] ?>">
                <?php echo $data ['headers'] ['spanVideo'] ?>
                </span>
                    </h2>
                </div>
                <div class="buttons custom-navigation-two">
                    <a class="<?php echo $data ['introControls'] ['controlLeft'] ?>" href="#"><i
                                class="<?php echo $data ['introControls'] ['fontArrowLeft'] ?>" aria-hidden="true"></i></a>
                    <a class="<?php echo $data ['introControls'] ['controlRight'] ?>" href="#"><i
                                class="<?php echo $data ['introControls'] ['fontArrowRight'] ?>" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <ul class="section-container">
            <li class="pull-left-item">
                <div class="upcoming-concert">
                    <div class="concert-img">
                        <img src="<?php echo $data ['concert'] ['imgUrl'] ?>" class="concert-image"
                             alt="<?php echo $data ['concert'] ['imgAlt'] ?>">
                        <div class="concert-date">
                            <p class="date-number"><?php echo $data ['concert'] ['dateNumber'] ?></p>
                            <p class="date-month"><?php echo $data ['concert'] ['dateMonth'] ?></p>
                        </div>
                    </div>
                    <div class="concert-info">
                        <h3 class="concert-name"><?php echo $data ['concert'] ['concertName'] ?></h3>
                        <table class="table-concert">
                            <tr>
                                <td class="info"><?php echo $data ['concert'] ['placeInfo'] ?></td>
                                <td class="info"><?php echo $data ['concert'] ['place'] ?></td>
                            </tr>
                            <tr>
                                <td class="info"><?php echo $data ['concert'] ['dateInfo'] ?></td>
                                <td class="info"><?php echo $data ['concert'] ['place'] ?></td>
                            </tr>
                            <tr>
                                <td class="info"><?php echo $data ['concert'] ['timeInfo'] ?></td>
                                <td class="info"><?php echo $data ['concert'] ['time'] ?></td>
                            </tr>
                            <tr>
                                <td class="info"><?php echo $data ['concert'] ['priceInfo'] ?></td>
                                <td class="info"><?php echo $data ['concert'] ['price'] ?></td>
                            </tr>
                        </table>
                        <div class="button-container">
                            <a href="<?php echo $data['concertBuy']['url']; ?>"
                               class="<?php echo $data ['concertBuy'] ['class'] ?>"><?php echo $data ['concertBuy'] ['title'] ?></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="pull-right-item">
                <div class="flexslider3">
                    <ul class="slides">
                        <?php
                        foreach ($data ['video'] as $videoItem) {
                            ?>
                            <li>

                                <iframe class="iframe-video"
                                        src="<?php echo $videoItem ['iframeUrl'] ?>" allowfullscreen></iframe>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="founders">
    <div class="container">
        <div class="founders-content">
            <div class="founders-heading">
                <h2 class="<?php echo $data ['foundersContent'] ['headerClass'] ?>">
                    <?php echo $data ['foundersContent'] ['headerContent'] ?>
                </h2>
                <p class="<?php echo $data ['foundersContent'] ['subheadClass'] ?>">
                    <span class="<?php echo $data ['foundersContent'] ['subheadClass'] ?>">1982</span>
                    <span class="<?php echo $data ['foundersContent'] ['spanClass'] ?>">cantus</span>
                    <?php echo $data ['foundersContent'] ['subheadContent'] ?>
                </p>
                <div class="learn-more-container">
                    <a class="<?php echo $data ['learnMoreButton'] ['class'] ?>"
                       href="<?php echo $data ['learnMoreButton'] ['url'] ?>"
                       id="go"><?php echo $data ['learnMoreButton'] ['title'] ?></a>
                </div>
            </div>
            <img src="<?php echo $data ['foundersContent'] ['imgUrl'] ?>" class="founder-img"
                 alt="<?php echo $data ['foundersContent'] ['imgAlt'] ?>">
        </div>
    </div>
</section>
<section class="songs-instagram">
    <div class="container">
        <ul class="section-container">
            <li class="pull-left-item">
                <div class="<?php echo $data ['sectionHeader'] ['class']; ?>">
                    <h2 class="<?php echo $data ['sectionHeader'] ['headerClass']; ?>">
                        <?php echo $data ['headers'] ['headerSongs']; ?>
                        <span class="<?php echo $data ['sectionHeader'] ['spanClass']; ?>">
                            <?php echo $data ['headers'] ['spanSongs']; ?>
                        </span>
                    </h2>
                </div>
                <iframe class="<?php echo $data ['songContent'] ['iframeClass']; ?>"
                        src="<?php echo $data ['songContent'] ['iframePlayerUrl']; ?>"></iframe>
                <ul class="song-list">
                    <li class="songs-item">
                        <ol class="list">
                            <?php
                            foreach ($data ['songsColumn'] as $songItem) {
                                ?>
                                <li class="song">
                                    <a class="song-link" href="<?php echo $songItem ['url'] ?>">
                                        <?php echo $songItem ['song'] ?>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ol>
                    </li>
                    <li class="songs-item">
                        <ol class="list" start="5">
                            <?php
                            foreach ($data ['songsColumn2'] as $songItem) {
                                ?>
                                <li class="song">
                                    <a class="song-link" href="<?php echo $songItem ['url'] ?>">
                                        <?php echo $songItem ['song'] ?>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ol>
                    </li>
                    <li class="songs-item">
                        <ol class="list" start="9">
                            <?php
                            foreach ($data ['songsColumn3'] as $songItem) {
                                ?>
                                <li class="song">
                                    <a class="song-link" href="<?php echo $songItem ['url'] ?>">
                                        <?php echo $songItem ['song'] ?>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ol>
                    </li>
                </ul>
            </li>
            <li class="pull-right-item">
                <div class="<?php echo $data ['sectionHeader'] ['class'] ?>">
                    <h2 class="<?php echo $data ['sectionHeader'] ['headerClass'] ?>">
                        <?php echo $data ['headers'] ['headerInst'] ?>
                        <span class="<?php echo $data ['sectionHeader'] ['spanClass'] ?>">
                <?php echo $data ['headers'] ['spanInst'] ?>
                </span>
                    </h2>
                </div>
                <div class="insta-photos">
                    <ul class="insta-list">
                        <?php
                        foreach ($data ['instList'] as $photoItem) {
                            ?>
                            <li class="insta-item">
                                <img src="<?php echo $photoItem ['url'] ?>" class="<?php echo $photoItem ['class'] ?>" alt="Instagram">
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="download">
    <div class="container">
        <div class="download-content">
            <div class="download-header">
                <h2 class="<?php echo $data ['downloadSection'] ['headerClass'] ?>"><?php echo $data ['downloadSection'] ['headerContent'] ?></h2>
                <p class="<?php echo $data ['downloadSection'] ['subheadClass'] ?>"><?php echo $data ['downloadSection'] ['subheadContent'] ?></p>
            </div>
            <div class="app-stores">
                <ul class="app-list">
                    <?php foreach ($data ['downloadApps'] as $appLink) { ?>
                    <li class="app-item">
                        <a href="<?php echo $appLink ['url'] ?>" class="<?php echo $appLink ['class'] ?>">
                            <img src="<?php echo $appLink ['src'] ?>" alt="<?php echo $appLink ['alt'] ?>">
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="newslatter">
    <div class="container">
        <form class="<?php echo $data ['formSubscribe'] ['class'] ?>" method="<?php echo $data ['formSubscribe'] ['method'] ?>" action="<?php echo $data ['formSubscribe'] ['action'] ?>">
            <ul class="input-list">
                <li class="input-item">
                    <input type="<?php echo $data ['inputSubscribe'] ['type'] ?>" class="<?php echo $data ['inputSubscribe'] ['class'] ?>" placeholder="<?php echo $data ['inputSubscribe'] ['placeholder'] ?>">
                </li>
                <li class="input-item">
                    <button type="<?php echo $data ['submitButton'] ['type'] ?>" class="<?php echo $data ['submitButton'] ['class'] ?>" value="">
                        <i class="<?php echo $data ['submitButton'] ['iconClass'] ?>" aria-hidden="true"></i>
                    </button>
                </li>
            </ul>
        </form>
    </div>
</section>
<footer class="footer">
    <div class="footer-links">
        <ul class="footer-list">
            <?php
            foreach ($data ['footerMenu'] as $footItem) {
                ?>
                <li class="foot-item">
                    <a href="<?php echo $footItem['url']; ?>" class="<?php echo $footItem['class']; ?>">
                        <?php echo $footItem['title']; ?>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
    <p class="<?php echo $data ['copyright'] ['copyClass'] ?>">
        <span class="<?php echo $data ['copyright'] ['copyClass'] ?>">
            <?php echo $data ['copyright'] ['copyDate'] ?>
        </span>
        <span class="<?php echo $data ['copyright'] ['spanClass'] ?>">
            <?php echo $data ['copyright'] ['spanContent'] ?>
        </span>
        <?php echo $data ['copyright'] ['copyContent'] ?>
    </p>
</footer>
<div id="modal_form"><!-- Popup window-->
    <span id="modal_close">X</span> <!-- Closing button -->
    <div class="heading">
        <div class="<?php echo $data ['sectionHeader'] ['class'] ?>">
            <h2 class="<?php echo $data ['sectionHeader'] ['headerClass'] ?>">
                <?php echo $data ['headers'] ['popupHeader'] ?>
                <span class="<?php echo $data ['sectionHeader'] ['spanClass'] ?>">
                <?php echo $data ['headers'] ['popupSpan'] ?>
                </span>
            </h2>
        </div>
        <p class="<?php echo $data ['popup'] ['popupContentClass'] ?>"><?php echo $data ['popup'] ['popupContent'] ?></p>
        <form class="<?php echo $data ['formSubscribe'] ['class'] ?>" method="<?php echo $data ['formSubscribe'] ['method'] ?>" action="<?php echo $data ['formSubscribe'] ['action'] ?>">
            <ul class="input-list">
                <li class="input-item">
                    <input type="<?php echo $data ['inputTextSubscribe'] ['type'] ?>" class="<?php echo $data ['inputTextSubscribe'] ['class'] ?>" placeholder="<?php echo $data ['inputTextSubscribe'] ['placeholder'] ?>">
                </li>
                <li class="input-item">
                    <input type="<?php echo $data ['inputSubscribe'] ['type'] ?>" class="<?php echo $data ['inputSubscribe'] ['class'] ?>" placeholder="<?php echo $data ['inputSubscribe'] ['placeholder'] ?>">
                </li>
                <li class="input-item">
                    <button type="<?php echo $data ['submitButton'] ['type'] ?>" class="<?php echo $data ['submitButton'] ['class'] ?>" value="">
                        <i class="<?php echo $data ['submitButton'] ['iconClass'] ?>" aria-hidden="true"></i>
                    </button>
                </li>
            </ul>
        </form>
    </div>
</div>
<div id="overlay"></div><!-- background overlay -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="flexslider/jquery.flexslider.js"></script>
<script src="/slick/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
<script src="js/main.js"></script>
</body>
</html>