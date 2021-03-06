<?php
	if($_SERVER['HTTP_X_FORWARDED_PROTO'] != "https")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
?>
<!DOCTYPE html>
<html lang="ko">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="하머스, 영남대학교 창업동아리 Hamus">
    <meta name="author" content="Hamus">
    <meta name="theme-color" content="#e56866">
    <meta name="msapplication-navbutton-color" content="#e2221f">
    <meta name="apple-mobile-web-app-status-bar-style" content="#e2221f">
    <title>Hamus</title>

    <!-- 부트스트랩 CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- 커스텀 CSS -->
    <link href="css/hamus.css?noncache" rel="stylesheet">
    <!-- 커스텀폰트 -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='//fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/earlyaccess/nanumgothic.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/hanna.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#aboutus">About Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#whatwedo">Activities</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#history">History</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#recruit">Recruit</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">

                <div class="intro-lead-in">
                    <img src="img/logos/headerlogo.png" width="300px">
                </div>

                <div class="intro-heading">
                    세상을 바꾸는 아이디어
                </div>
                <a href="#recruit" class="page-scroll btn btn-apply">지원하기</a><br>
                <!--a href="#services" class="page-scroll btn btn-xl">더 알아보기</a--><br>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="aboutus" class="bg-light-gray">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"><h2>꿈과 현실을 낚아채는</h2>
                    <h2 class="section-heading"><br />창업동아리 <font color="#e2221f">Hamus</font>입니다.</h2>
                    <div class="sulmyungchung">
                        <h3 class="section-subheading text-muted">
                        Hāmus는 고전라틴어로 작은 갈고리를(¿) 뜻하며, <br />일상생활에서 쉽게 스쳐지나가는 의문점(물음표 : ?)들을 <br>뒤집어 생각하자는 모토를 동아리명으로 활동하고 있습니다. 
                        </h3>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Team Section -->
    <section id="team">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">TEAM</h2>
                    <h3 class="section-subheading text-muted">동아리 구성</h3>
                </div>
            </div>   
        <div class="row text-center">
                <div class="col-md-4 col-sm-4 management text-center portfolio-item">
                    <a href="#team_management_modal" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/team/team_management.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Management</h4>
                        <p>경영 팀</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 develop text-center portfolio-item">
                    <a href="#team_develop_modal" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/team/team_develop_.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Develop</h4>
                        <p>개발 팀</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 design text-center portfolio-item">
                    <a href="#team_design_modal" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/team/team_design.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color:black;">Design</h4>
                        <p>디자인 팀</p>
                    </div>
                </div>
            </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="whatwedo" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">What We Do</h2>
                    <h3 class="section-subheading text-muted">동아리 활동 내용<br>Click images to see more details.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 portfolio-item">
                    <a href="#whatwedo_idea" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/whatwedo/whatwedo_IdeaConference.png" class="text-center" width="100%"  alt="">
                    </a>
                    <div class="portfolio-caption hidden-sm hidden-xs" >
                        <h4>Idea 회의</h4>
                        <p class="text-muted">창업동아리 활동의 기초</p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/whatwedo/whatwedo_MajorExchange.png" class="img-centered" width="100%" alt="">
                    </a>
                    <div class="portfolio-caption hidden-sm hidden-xs">
                        <h4>전공교류</h4>
                        <p class="text-muted">Hamus 활동의 핵심</p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/whatwedo/whatwedo_makingthings.png" class="img-centered" width="100%" alt="">
                    </a>
                    <div class="portfolio-caption hidden-sm hidden-xs">
                        <h4>제품 제작</h4>
                        <p class="text-muted">제품 제작초기 창업 모든 분야를 직접 제작</p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/whatwedo/whatwedo_camp.png" class="img-centered" width="100%" alt="">
                    </a>
                    <div class="portfolio-caption hidden-sm hidden-xs">
                        <h4>친목활동</h4>
                        <p class="text-muted">일만 하다 죽을 텐가! 놀땐 놀아야지!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">제품</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#hami" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/hami.png" class="img-responsive img-centered" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Hami 독서대</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#minion" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/minion.png" class="img-responsive img-centered" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>미니언 독서대</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#quickbills" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/quickbills.png" class="img-responsive img-centered" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>퀵빌</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#curo" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/curo.png" class="img-responsive img-centered" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Curo</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#daitsol" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/daitsol.png" class="img-responsive img-centered" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>다잇솔</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="history" class="bg-light-gray">
        <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">History</h2>
                    <h3 class="section-subheading text-muted">동아리 연혁</h3>
                </div>
        </div>
        <div class="row text-center">
                <div class="col-md-3 col-sm-3">
                    <div class="portfolio-caption" style="margin-top:30px;">
                        <h4>2013</h4>
                    </div>
                    <div class="history-content" style="margin-top:30px;">
                        <ul>
                            <li class="history-list">13.06 Hamus 창업동아리 창립</li>
                            <li class="history-list">13.06 창업 캠퍼스 영웅전 참가</li>
                            <li class="history-list">13.06 산학 창업교육, 창업문화 한마당 참가</li>
                            <li class="history-list">13.07 싱가포르 국립대학 창업캠프 참가</li>
                            <li class="history-list">13.11 영남대학교 창업경진대회</li>
                            <li class="history-list">13.12 2013 Capstone Design - BIZ 연계 동상</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="portfolio-caption" style="margin-top:30px;">
                        <h4>2014</h4>
                    </div>
                    <div class="history-content" style="margin-top:30px;">
                        <ul>
                            <li class="history-list">14.03 대구시 청년창업지원사업 예비창업자 최종선정</li>
                            <li class="history-list">14.05 YU 창업 아이템 경진대회 대상</li>
                            <li class="history-list">14.07 싱가포르 국립대학 창업캠프 참가</li>
                            <li class="history-list">14.09 Hamus 사업자등록 창업</li>
                            <li class="history-list">14.10 산학협력 EXCO 학생창업 전시</li>
                            <li class="history-list">14.11 영남대 LINC사업단장 표창장</li>
                            <li class="history-list">14.11 영남대 창업경진대회 은상</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="portfolio-caption" style="margin-top:30px;">
                        <h4 style="color:black;">2015</h4>
                    </div>
                    <div class="history-content" style="margin-top:30px;margin-top:30px;">
                        <ul>
                            <li class="history-list">15.02 대경강원권 창업경진대회 금상</li>
                            <li class="history-list">15.05 YU 창업 아이템 경진대회 동상</li>
                            <li class="history-list">15.07 삼성투모로우 솔루션 본선진출</li>
                            <li class="history-list">15.08 YU 창업 챌린지 입상 후 지원</li>
                            <li class="history-list">15.10 YU 창업 경진대회 장려상</li>
                            <li class="history-list">15.12 대구청년창업아이템 경진대회 최종본선 진출</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="portfolio-caption" style="margin-top:30px;">
                        <h4 style="color:black;">2016</h4>
                    </div>
                    <div class="history-content" style="margin-top:30px;">
                        <ul>
                            <li class="history-list">16.02 YU 창업 왕중왕전 동상</li>
                        </ul>
                    </div>
                </div>
        </div>
    </section>

    

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <a href="//yu.ac.kr">
                        <img src="img/logos/signature_keh50.png" class="img-responsive img-centered" alt="영남대학교">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="//www.creativekorea.or.kr">
                        <img src="img/logos/creativekorea.png" class="img-responsive img-centered" alt="창조경제타운">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="//www.koef.or.kr">
                        <img src="img/logos/KEF_LOGO.png" class="img-responsive img-centered" alt="(재)한국청년기업가정신재단">
                    </a>
                </div>
            </div>
        </div>
    </aside>
    <!-- Contact Section -->
    <section id="recruit">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Recruiting</h2>
                    <h3 class="section-subheading text-muted">창업동아리 HAMUS와 함께할 가족을 모집합니다.</h3>
                        잡고싶은꿈<br />
                        잡아야 하는 현실<br />
                        창업동아리 HAMUS로 낚아채십시오.<br /><br />
                        모집 분야 : 꿈과 열정이 있다면 누구나!<br />
                        주요활동 : 아이디어회의 / 전공교류 / 제품 제작 / 친목활동<br /> <br /><br />
                    </div>
                <div class="row text-center">
                     <a href="http://goo.gl/forms/H8jkUbz49H" class="btn btn-xl">지원하기</a>  <a href="https://open.kakao.com/o/sTnz1Nh" class="btn btn-xl">문의하기(카톡)</a>
                 </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">

                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-6">
                                
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
            

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
   
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Hamus 2016</span>
                </div>
                <div class="col-md-4">
                    <div class="list-inline social-buttons">
                        HAMUS<br />대표: 이승진 |
사업자등록번호: 504-31-15708<br />
 <i class="fa fa-map-marker"></i> 경상북도 경산시 대학로 280 영남대학교 창업보육센터 219호
 <br /><i class="fa fa-phone"></i> <a href="tel:010-6636-6439">010-6636-6439</a>&nbsp;&nbsp;<i class="fa fa-fax"></i> 0504-030-6439

                        <!--li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li-->
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">이용약관</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Activity Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Activity Modal 1 -->
    <div class="portfolio-modal modal fade" id="whatwedo_idea" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>IDEA 회의</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-responsive img-centered" src="img/whatwedo/idea.png" alt="">
                            <!--img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt=""-->
                            <p>브레인 스토밍으로 시작, 각자의 아이디어를 자유롭게 말하고, 다른전공의 시각에서 아이디어를 구체화하고,<br /> 최종적으로 사업화를 진행합니다.<br />우리는 단순히 'IDEA'로 끝내지 않고, 최종 사업화를 목표로 아이디어 회의를 진행합니다.<br />또한 이렇게 구체화된 'IDEA'로 14년에 창엽한 Hamus 회사에서 직접 '사업'도 진행합니다.</p>
                            <ul class="list-inline">
                                <li>정기회의일: 매주 월요일 18:00</li>
                                <li>장소: 동아리방</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> 닫기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>전공 교류</h2>
                            <p class="item-intro text-muted">Hamus 활동의 핵심</p>
                            <img class="img-responsive img-centered" src="img/whatwedo/conference.png" alt="">
                            <p>전공 별로 창업에 관심있는 강의를 만들어 정해진 시간에 강의를 하고,<br />강의에 대한 자유로운 토론을 하는 활동입니다.<br />전공 융합이 없는 아이디어는 성공할 수 없습니다.<br />우리는 서로의 전공지식을 적극적으로 공유합니다.</p>
                            <ul class="list-inline">
                                <li>정기회의일: 매주 목요일 18:00</li>
                                <li>장소: 동아리방</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> 닫기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>제품 제작</h2>
                            <p class="item-intro text-muted">초기 창업 모든 분야를 직접 제작</p>
                            <img class="img-responsive img-centered" src="img/whatwedo/develop.png" alt="">
                            <!--img class="img-responsive img-centered" src="img/portfolio/3.png" alt=""-->
                            <p>아이디어 회의에서 사업성이 증명 된 아이디어는 직접 프로토타입을 제작합니다.<br />우리는 상상으로만 아이디어를 끝내지 않습니다.<br />우리는 만족할 떄 까지 만들어 봅니다.<br /><br />포트폴리오를 참조해주세요.</p>
                            <ul class="list-inline">
                                <li>APP, 프로그램 개발</li>
                                <li>디자인 제품 제작</li>
                                <li>홈페이지 제작 등</li>
                            </ul>

                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> 닫기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>친목활동</h2>
                            <p class="item-intro text-muted">동아리에서 친목 빠지면 시체</p>
                             <img class="img-responsive img-centered" src="img/whatwedo/chinmok.png" alt="">
                            <p>학기별 MT, 방학엔 창업캠프, 회의하다 우울하면 등산과 캠핑, 친해진다 밥 친구<br />
                                아이디어는 경험에서 나오며, 완성도는 팀워크에서 나옵니다.</p>
                            <p></p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> 닫기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 경영팀 -->
    <div class="portfolio-modal modal fade" id="team_management_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body text-center">
                            <h2>경영팀</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-responsive img-centered" src="img/team/team_management_concept.jpg" alt="">
                            <p>이론 수업에 미칠것 같지 않습니까?<br />
                            경영학 세부전공 전반을 직접 경험해 볼 수 있습니다.(회계, 재무, 마케팅, 생산운영관리 등)</p>
                            <h3>누리고 있는 혜택</h3>
                            <p>
                               
                                    경영전공서적 제공<br />
                                    창업 경영서 구매지원<br />
                                    PPT 제작 교육<br />
                                    촬영을 통한 발표 교정<br />
          
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> 닫기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 개발팀 -->
    <div class="portfolio-modal modal fade" id="team_develop_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>개발팀</h2>
                            <p class="item-intro text-muted">공밀레- 공밀레-</p>
                            <img class="img-responsive img-centered" src="img/team/team_develop_concept.jpg" alt="">
                            <p id="custom">책상위에 발올리고 자는것같지만 사실 그는 손과 발로 코딩중이다.</p>
                            <p>고학년때나 배울 수 있는 안드로이드 프로그래밍, 웹프로그래밍, 네트워크 프로그래밍 등을 가장빨리 접해보고 시작할 수 있는곳!<br />
                            <br />
                            배우고자 하는 의지만 있다면 C언어만 배웠어도 뭐든지 할수있습니다.<br />
                            아, 참 개발자들은 개발실력>>>>넘사벽>>학벌 인거 아시죠?<br />
                            개발실력과 실무경력을 모두 쌓을 수 있습니다.</p>                                

                            <h3>누리고 있는 혜택</h3>
                            <p>
                               
                                    개발용 PC 1인 1PC 지원<br />
                                    신기술 서적 구입비 지원<br />
                                    개발용 보드 및 기자재 지원<br />
                                    등등 필요한것 <b><font color="red">전부 지원</font></b><br />
          
                            </p>

                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>닫기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="hami" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Hami 독서대</h2>
                            <img class="img-responsive img-centered" src="img/portfolio/hami_de.png" alt="">
                            <p>H형 본체와 s자고리를 합쳐만든 휴대용 아이디어 독서대</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>닫기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="minion" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Minion(미니언) 독서대</h2>
                            <img class="img-responsive img-centered" src="img/portfolio/minion_de1.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/minion_de2.png" alt="">                            
                            <p>Hami독서대에 미니언캐릭터를 입혀 캐릭터제품 제작을 가능하게 한 캐릭터 상품 </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>닫기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="quickbills" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>퀵빌즈(Quick Bills)</h2>                          
                            <p>종이영수증의 불편함을 통합관리서버를 구축하여 앱으로 해결한 중소상공인전용 영수증앱</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>닫기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="curo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>CURO</h2>                          
                            <p>간호사의 업무를 도와주는 간호업무통합보조시스템</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>닫기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="daitsol" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>다잇솔(Daitsol)</h2>
                            <img class="img-responsive img-centered" src="img/portfolio/daitsol_de.png" alt="">                            
                            <p>일회용제품의 남용을 막고, 부피를 줄이기위해 만든 칫솔하나에 세면도구가 다있는 제품</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>닫기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--디자인 팀-->
    <div class="portfolio-modal modal fade" id="team_design_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>디자인 팀</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-responsive img-centered" src="img/team/team_design_concept.jpg" alt="">
                            <p id="custom">디자인팀을 위해 개발팀이 태블릿을 받쳐주고 경영이 춤을춘다.</p>
                            <p>언제까지 과제만 하시겠습니까?<br />
                            <br />
                            다양한 디자인 경험을 제공합니다.(UI, UX, 웹디자인, 3D 모델링 등)</p>                                

                            <h3>누리고 있는 혜택</h3>
                            <p>
                               
                                    동아리방 내 Tablet, 디자인 PC 지원<br />
                                    기술팀과 함께 자신만의 홈페이지 제작 지원<br />
          
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>닫기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
