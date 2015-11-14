<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
    <title>WAWA VENTURES</title> 
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/discover.css" rel="stylesheet">
</head>
<body class="discover">
    <a href="#content" class="skip sr-only sr-only-focusable">컨텐츠로 건너뛰기</a>
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
        <main id="content">
            <div class="category">
                <div class="container">
                    <ul class="row">
                        <li class="col-xs-4 col-sm-2"><a href="#">기술</a></li>
                        <li class="col-xs-4 col-sm-2"><a href="#">바이오/의료</a></li>
                        <li class="col-xs-4 col-sm-2"><a href="#">뷰티/건강</a></li>
                        <li class="col-xs-4 col-sm-2"><a href="#">게임</a></li>
                        <li class="col-xs-4 col-sm-2"><a href="#">예술</a></li>
                        <li class="col-xs-4 col-sm-2"><a href="#">패션</a></li>
                        <li class="col-xs-4 col-sm-2"><a href="#">음식</a></li>
                        <li class="col-xs-4 col-sm-2"><a href="#">공연</a></li>
                        <li class="col-xs-4 col-sm-2"><a href="#">부동산</a></li>
                        <li class="col-xs-4 col-sm-2"><a href="#">여행</a></li>
                        <li class="col-xs-4 col-sm-2"><a href="#">기부</a></li>
                        <li class="col-xs-4 col-sm-2"><a href="#">기타</a></li>
                    </ul>
                </div>
            </div>
            <div class="path hidden-xs">
                <div class="container">
                    <ol>
                        <li><a href="#"><i class="icon-home"></i></a></li>
                        <li role="separator" class="arrow"><i class="icon-left-open-big"></i></li>
                        <li><a href="#">프로젝트 발견하기</a></li>
                        <li role="separator" class="arrow"><i class="icon-left-open-big"></i></li>
                        <li>기술</li>
                    </ol>
                </div>
            </div>
            <section class="major">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">기술</h2>
                    </div>
                    <section class="search-area opened">
                        <header>
                            <h4>프로젝트 상세 검색하기</h4>
                            <button class="btn btn-link">닫기 <i class="icon-up-circle"></i></button>
                        </header>
                        <div class="form-wrap">
                            <form action="#" method="post">
                                <div class="row">
                                    <label class="col-md-2"><i class="dot"></i>카테고리별 검색</label>
                                    <div class="col-md-2">
                                        <select class="form-control input-sm" name="">
                                            <option value="">기술</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-control input-sm" name="">
                                            <option value="">선택</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-control input-sm" name="">
                                            <option value="">선택</option>
                                        </select>
                                    </div>
                                    <label class="col-md-2"><i class="dot"></i>옵션별 검색</label>
                                    <div class="col-md-2">
                                        <select class="form-control input-sm" name="">
                                            <option value="">기술</option>
                                        </select>
                                    </div>
                                    <label class="col-md-2"><i class="dot"></i>전체 검색</label>
                                    <div class="col-md-2">
                                        <select class="form-control input-sm" name="">
                                            <option value="">기술</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control input-sm" type="text" id="">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary btn-sm btn-block">검색하기</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#recommend-project" aria-controls="recommend-project" role="tab" data-toggle="tab">추천 프로젝트</a></li>
                        <li role="presentation"><a href="#popular-project" aria-controls="popular-project" role="tab" data-toggle="tab">인기 프로젝트</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="recommend-project">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="popular-project">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <section class="list">
                    <h4>총 <strong>415</strong>개의 프로젝트가 있습니다.</h4>
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#popular-category-1" aria-controls="popular-category-1" role="tab" data-toggle="tab">최근 등록순</a></li>
                        <li role="presentation"><a href="#">제목순 정렬</a></li>
                        <li role="presentation"><a href="#">조회순 정렬</a></li>
                        <li role="presentation"><a href="#">낮은 금액순</a></li>
                        <li role="presentation"><a href="#">높은 금액순</a></li>
                        <li role="presentation"><a href="#">참여 높은순</a></li>
                    </ul>
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
                </section>
            </div>
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/paging.php'); ?>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docjs.php'); ?>
    <script src="/js/app/discover.js"></script>
    
</body>
</html>