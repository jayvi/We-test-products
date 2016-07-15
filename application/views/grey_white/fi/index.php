<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
    <title>Reward Center</title>

    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,800italic,800,700italic,700,600,600italic,400italic,400' rel='stylesheet' type='text/css'>
    

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/grw/fi/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/grw/fi/css/style.css">

    <!-- Media queries -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/grw/fi/css/media.css">

</head>
<body>
    <div id="wrapper">
        <div class="header-container">
            <header id="header" class="container">
                <ul class="main-nav clearfix">
                    <li class="active">iPhone</li>
                    <li>iWatch</li>
                    <li>iPad</li>
                    <li>iMac</li>
                </ul>
            </header>
            <!-- End of header -->
        </div>
        <!-- End of header-container -->
        
        <section id="content1" class="section-container">
            <div class="container">
                <div class="top-content-wrap">
                    <div class="top-content-inner align-center pos-rel">
                        <img class="flag-img" src="<?php echo base_url()?>assets/grw/fi/images/fi.png" alt="Flag">
                        <h1 class="main-heading">TESTAA & PIDÄ</h1>
                        <p class="sub-heading">Sinut on sattumanvaraisesti valittu testaamaan uusi iPhone 6s! Testaamisen jaälkeen SAAT PITÄÄ SEN IKUISESTI!!</p>
                        <p>
                             Tämä ei ole vitsi! Sinut on kutsuttu osallistumaan meidän iPhone6s testaukseen. Etsimme <strong>3</strong> lisä arvostelijaa jotta voimme tehdä iPhone 7:sta parhaan iPhonen ikinä. Jos haluat olla osana tätä yksityistä testi ryhtmää, vastaa seuraaviin 4 kysymykseen antaakseen meile arvokasta palautetta. Kiitokseksi saat pitää UUDEN iPhone 6s 16GB puhelimen ilmaiseksi testin jälkeen! Sinulla on <strong>1 minuuttia ja 56 sekuntia</strong> aikaa vastata, muuten valitsemme toisen kandidaatin! 
                        </p>
                    </div>
                </div>
                <!-- End of top-content -->
            </div>
            <!-- End of container -->

            <section class="bg-gray">
                <div class="container clearfix">
                    <div id="q1">
                        <div class="question-info">
                            <span class="question-number">01</span>
                            <span class="question-text ucase">Kysymys</span>
                            <span class="total-question">of 4</span>
                        </div>
                        <div class="question-section">
                            <p class="question">Oletko ennen testannut Apple tuotella?</p>
                            <a href="javascript:;" class="btn bq1">Kyllä</a>
                            <a href="javascript:;" class="btn bq1">Ei</a>
                        </div>
                    </div>
                    <!-- End of q1 -->

                    <div id="q2">
                        <div class="question-info">
                            <span class="question-number">02</span>
                            <span class="question-text ucase">Kysymys</span>
                            <span class="total-question">of 4</span>
                        </div>
                        <div class="question-section">
                            <p class="question">Mikä näistä ominaisuuksista tulisi olla iPhone 7:ssa?</p>
                            <a href="javascript:;" class="btn bq2">Langaton lataus</a>
                            <a href="javascript:;" class="btn bq2">QHD Näyttö Resoluutio</a>
                        </div>
                    </div>
                    <!-- End of q2 -->


                    <div id="q3">
                        <div class="question-info">
                            <span class="question-number">03</span>
                            <span class="question-text ucase">Kysymys</span>
                            <span class="total-question">of 4</span>
                        </div>
                        <div class="question-section">
                            <p class="question">Mitä viestimuotoa käytät eniten?</p>
                            <a href="javascript:;" class="btn bq3">Normaali Tekstiviesti</a>
                            <a href="javascript:;" class="btn bq3">Multimedia Viesti</a>
                        </div>
                    </div>
                    <!-- End of q3 -->

                    <div id="q4">
                        <div class="question-info">
                            <span class="question-number">04</span>
                            <span class="question-text ucase">Kysymys</span>
                            <span class="total-question">of 4</span>
                        </div>
                        <div class="question-section">
                            <p class="question"> Onko sinulla hyväksyttävä toimitus osoite, jotta voit saada sinun iPhone 6s puhelimen?</p>
                            <a href="#" class="btn bq4">Kyllä</a>
                            <a href="#" class="btn bq4">Ei</a>
                        </div>
                    </div>
                    <!-- End of q4 -->
                </div>

            </section>
            <!-- End of bg-gray -->

        </section>
        <!-- End of conetnt1 -->

        <section id="content2" class="checking-section">
            <div class="container">
                <div class="checking-section-inner">
                    <h2 style="text-align:center;">Tarkistamme vastauksiasi.</h2>
                    
                    <div class="spinner">
                      <div class="dot1"></div>
                      <div class="dot2"></div>
                    </div>
                    <!-- end of spinner -->
                    
                    <p class="result" id="result1">
                        Ei löytyneiitä tupla rekisteröitymisiä.
                    </p>
                    <p class="result" id="result2">
                        <strong>3</strong> paikkaa vielä jäljellä
                    </p>
                    <p class="result" id="result3">
                        Sinut on hyväksytty <strong>1</strong> iPhone 6s + Apple T-Paita vastaanottajaksi
                    </p>
                </div>
                <!-- End of checking-section-inner -->

            </div>
        </section>
        <!-- End of content2 -->

        <section id="content3">
            <div class="container">
                <h2>Onneksi olkoon! Sinut on hyväksytty testiryhmään!</h2>
                <p class="sub-heading">Klikkaa alla olevaa painiketta ja rekisteröidy sinun ilmaiselle iPhone 6s puhelimelle kiitokseksi kyselyyn vastaamisesta.</p>
                <div class="claim-section pos-rel">
                    <div class="claim-block">
                        <a href="http://fi.quizonaut.com/campaigns/iphone6s/?ref=PA_sp&refid=585a28f6&aid=585a28f6&bid=2c1ad674" class="btn btn-primary ucase">Lunasta Nyt</a>
                        <p>Syötä oikea toimitus osoite seuraavalla sivulla saadaksesi ilmaisen iPhone 6s puhelimen. Rajoitettu määrä, toimi nopeasti!</p>
                    </div>
                    <img class="product-image" src="<?php echo base_url()?>assets/grw/fi/images/product.png" alt="Product image">
                </div>
            </div>
        </section>
        <!-- End of content3 -->

        <section id="comment" class="comment-section-container">
            <div class="container">
                <div class="comment-section">
                    <div class="comment-header clearfix">
                        <p class="total-comment">17 Kommentit</p>
                        <div class="sort-wrap">
                            <span class="sort-by">Sort by</span>
                            <div class="btn-group">
                              <button type="button" class="sort-btn btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu">
                                <li><a href="#">Top</a></li>
                                <li><a href="#">Bottom</a></li>
                              </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End of comment-header -->

                    <div class="comment-body">
                        <ul class="comments-list">
                            <li id="comment1" class="clearfix">
                                <div class="user-img"><img src="<?php echo base_url()?>assets/grw/fi/images/user1.jpg" alt="User Image"></div>
                                <div class="user-right">
                                    <a href="#" class="user-name">Laura Reed</a>
                                    <p>Sain omani tänään. Kiitos tosi paljon!! T-paitani on liian iso, voinko vaihtaa sen jollain tavalla? :)</p>
                                    <img class="uploaded-img" src="<?php echo base_url()?>assets/grw/fi/images/img1.jpg" alt="Image">
                                    <div class="comment-status">
                                        <span>Tykkää · Reply · <img src="<?php echo base_url()?>assets/grw/fi/images/like-icon.png" width="13px" height="13px"></img></span>
                                        <span class="date">
                                            330 · Feb 11, 2016 3:17pm
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li id="comment2" class="clearfix">
                                <div class="user-img"><img src="<?php echo base_url()?>assets/grw/fi/images/user2.jpg" alt="User Image"></div>
                                <div class="user-right">
                                    <a href="#" class="user-name">Nikki Jefferson</a>
                                    <p>En ollut varma onko tämä ihan totta, mutta sain puhleimeni tänään!</p>
                                    <div class="comment-status">
                                        <span>Tykkää · Reply · <img src="<?php echo base_url()?>assets/grw/fi/images/like-icon.png" width="13px" height="13px"></img></span>
                                        <span class="date">
                                            51 · Feb 19, 2016 4:59pm
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li id="comment3" class="clearfix">
                                <div class="user-img"><img src="<?php echo base_url()?>assets/grw/fi/images/user3.jpg" alt="User Image"></div>
                                <div class="user-right">
                                    <a href="#" class="user-name">Marc Harvey</a>
                                    <p>Luulin että tämä huijaus, mutta iPhone ja jätti paita tuli postilaatikko eilen. Lisää tämän laisia! :D</p>
                                    <img class="uploaded-img" src="<?php echo base_url()?>assets/grw/fi/images/img2.jpg" alt="Image">
                                    <div class="comment-status">
                                        <span>Tykkää · Reply · <img src="<?php echo base_url()?>assets/grw/fi/images/like-icon.png" width="13px" height="13px"></img></span>
                                        <span class="date">
                                            10 · Feb 25, 2016 11:17am
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- End of comments-list -->
                    </div>
                    <!-- End of comment-body -->

                </div>
                <!-- End of comment-section -->
            </div>
        </section>
        <!-- End of comment -->

    </div>
    <!-- End of wrapper -->


    
    <!-- Scripts -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="<?php echo base_url()?>assets/grw/fi/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/grw/fi/js/custom.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $("#comment1").fadeIn();
            }, 1000);
            setTimeout(function() {
                $("#comment2").fadeIn();
            }, 2000);
            setTimeout(function() {
                $("#comment3").fadeIn();
            }, 3000);
            
            $(".bq1").click(function() {
                $("#q1").fadeOut(0);
                $("#q2").fadeIn(500);
            });
            $(".bq2").click(function() {
                $("#q2").fadeOut(0);
                $("#q3").fadeIn(500);
            });
            $(".bq3").click(function() {
                $("#q3").fadeOut(0);
                $("#q4").fadeIn(500);
            });

            $(".bq4").click(function() {
                $("#content1").fadeOut(0);
                $("#comment").fadeOut(0);
                $("#content2").fadeIn();
                setTimeout(function() {
                    $("#result1").fadeIn(1000);
                }, 3000);
                setTimeout(function() {
                    $("#result2").fadeIn(1000);
                }, 4500);
                setTimeout(function() {
                    $("#result3").fadeIn(1000);
                }, 6000);
                setTimeout(function() {
                    $("#content2").fadeOut();

                }, 7500);
                setTimeout(function() {
                    $("#content3").fadeIn();
                    $("#comment").fadeIn();
                }, 7500);
            });
        }); 
    </script>

</body>
</html>