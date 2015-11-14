<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
    <title>WAWA VENTURES</title> 
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
</head>
<body class="main">
    <a href="#content" class="skip sr-only sr-only-focusable">컨텐츠로 건너뛰기</a>
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
        <main id="content">
            <div id="introduce">
                <div class="slides">
                    <section class="overview" style="background-image: url(/images/dummy/img_visual.jpg)">
                        <div class="container">
                            <h2>EXPLORE PROJECTS,<br>EVERYWHERE</h2>
                            <p>wawa ventures은 세계 최대의 기금을 조성하는 사이트로서<br>
    개인, 기업 및 비영리 단체가 온라인으로 자금을 모으는 데 도움을 드립니다.</p>
                            <p><a class="btn" href="#" role="button">MORE INFO</a></p>
                        </div>
                    </section>
                    <section class="overview" style="background-image: url(/images/dummy/img_visual.jpg)">
                        <div class="container">
                            <h2>EXPLORE PROJECTS,<br>EVERYWHERE #22222222</h2>
                            <p>wawa ventures은 세계 최대의 기금을 조성하는 사이트로서<br>
    개인, 기업 및 비영리 단체가 온라인으로 자금을 모으는 데 도움을 드립니다.</p>
                            <p><a class="btn" href="#" role="button">MORE INFO</a></p>
                        </div>
                    </section>
                </div>
                <div class="controls">
                    <div class="container">
                        <a class="prev" href="#" role="button"><i class="icon-left-open-big"></i></a>
                        <a class="next" href="#" role="button"><i class="icon-right-open-big"></i></a>
                    </div>
                </div>
            </div>
            <section id="record">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h2><span class="icon-circle"><i class="icon-database"></i></span>누적투자액</h2>
                            <strong>123,456,789만원</strong>
                        </div>
                        <div class="col-sm-4">
                            <h2><span class="icon-circle"><i class="icon-chart-line"></i></span>평균수익률</h2>
                            <strong>9.23%</strong>
                        </div>
                        <div class="col-sm-4">
                            <h2><span class="icon-circle"><i class="icon-users"></i></span>누적 투자자 수</h2>
                            <strong>1,234명</strong>
                        </div>
                    </div>
                </div>
            </section>
            <section id="recommend">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">추천 프로젝트</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                        </div>
                        <div class="hidden-xs hidden-sm col-md-4">
                            <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                        </div>
                    </div>
                    <a class="btn btn-default btn-sm btn-more" href="#">전체보기</a>
                </div>
            </section>
            <section id="popular">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">인기 프로젝트</h2>
                    </div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#popular-category-1" aria-controls="popular-category-1" role="tab" data-toggle="tab">기술</a></li>
                        <li role="presentation"><a href="#popular-category-2" aria-controls="popular-category-2" role="tab" data-toggle="tab">바이오/의료</a></li>
                        <li role="presentation"><a href="#popular-category-3" aria-controls="popular-category-3" role="tab" data-toggle="tab">미용/건강</a></li>
                        <li role="presentation"><a href="#popular-category-4" aria-controls="popular-category-4" role="tab" data-toggle="tab">게임</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="popular-category-1">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                            </div>
                            <a class="btn btn-default btn-sm btn-more" href="#">전체보기</a>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="popular-category-2">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                            </div>
                            <a class="btn btn-default btn-sm btn-more" href="#">전체보기</a>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="popular-category-3">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                            </div>
                            <a class="btn btn-default btn-sm btn-more" href="#">전체보기</a>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="popular-category-4">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                            </div>
                            <a class="btn btn-default btn-sm btn-more" href="#">전체보기</a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="category">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">카테고리</h2>
                    </div>
                    <div class="row">
                        <div class="col-xs-3">
                            <a href="#">
                                <div>
                                    <span><i class="icon-leaf"></i></span>
                                    <p>주식</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#">
                                <div>
                                    <span><i class="icon-leaf"></i></span>
                                    <p>디자인</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#">
                                <div>
                                    <span><i class="icon-leaf"></i></span>
                                    <p>음악</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#">
                                <div>
                                    <span><i class="icon-leaf"></i></span>
                                    <p>영화/비디오</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a class="btn btn-default btn-sm btn-more" href="#">전체보기</a>
                </div>
            </section>
            <section id="sponsor">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">스폰서</h2>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <!-- 이미지 정사각형으로 등록하기만 하면 됩니다 -->
                            <figure>
                                <img class="img-circle img-responsive" src="/images/dummy/img_sponsor_figure.jpg">
                                <figcaption>
                                    <strong>위정혁</strong>
                                    <p>펀드 / 금융의 교차로에 성장 단계의 기업과 투자자를 선도하는 작업 25년 보냈다.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <figure>
                                <img class="img-circle img-responsive" src="/images/dummy/img_sponsor_figure.jpg">
                                <figcaption>
                                    <strong>Yun Hyeok Yeo</strong>
                                    <p>패트릭 핀은 핀 캐피털 파트너스의 매니 징 파트너입니다.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-xs-6 col-sm-3">
                            <figure>
                                <img class="img-circle img-responsive" src="/images/dummy/img_sponsor_figure.jpg">
                                <figcaption>
                                    <strong>김다은</strong>
                                    <p>초기 단계의 소비자 기업의 다양한 연산자, 투자자 및 이사회 멤버를 포함했다.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <figure>
                                <img class="img-circle img-responsive" src="/images/dummy/img_sponsor_figure.jpg">
                                <figcaption>
                                    <strong>무브먼트케이</strong>
                                    <p>무브먼트케이는 소비자 제품 브랜드를 구축 배경을 가진 혁신적인 기업입니다.</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <a class="btn btn-default btn-sm btn-more" href="#">전체보기</a>
                </div>
            </section>
            <section id="begin">
                <div class="container">
                    <h2>지금 바로 시작해보세요!</h2>
                    <p>새로운 크라우드 펀딩 캠페인을 둘러 또는 기금을 마련하기 위해 자신의 캠페인을 시작합니다.</p>
                    <p>
                        <a class="btn" href="#">크라우드 펀딩이란?</a>
                        <a class="btn" href="#">프로젝트 시작하기</a>
                    </p>
                </div>
            </section>
        </main>

        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docjs.php'); ?>
    <script src="/js/lib/jquery.bxslider.min.js"></script>
    <script src="/js/app/main.js"></script>
    
</body>
</html>