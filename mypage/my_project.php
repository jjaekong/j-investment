<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
    <title>WAWA VENTURES</title> 
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/mypage.css" rel="stylesheet">
</head>
<body class="mypage">
    <a href="#content" class="skip sr-only sr-only-focusable">컨텐츠로 건너뛰기</a>
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
        <main id="content" class="my-project">
            <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/path.php'); ?>
            <div class="container">
                <div class="page-header">
                    <h2 class="page-title">나의 등록 프로젝트</h2>
                    <p>등록하신 프로젝트의 대기/수정대기/등록/등록기간만료의 상태를 확인할 수 있습니다</p>
                </div>
                <div class="filter">
                    <ul>
                        <li><a class="active" href="#">정식등록 대기중인<br> 프로젝트<i class="icon-angle-right"></i></a></li>
                        <li><a href="#">수정 후 승인 대기중인<br> 프로젝트<i class="icon-angle-right"></i></a></li>
                        <li><a href="#">정식등록된<br> 프로젝트<i class="icon-angle-right"></i></a></li>
                        <li><a href="#">등록기간 만료된<br> 프로젝트<i class="icon-angle-right"></i></a></li>
                    </ul>
                </div>
                <section>
                    <div class="section-header">
                        <h3 class="section-title">정식등록된 프로젝트</h3>
                        <a href="#" class="btn btn-default btn-sm">더보기</a>
                    </div>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/my_project_item.php'); ?>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/my_project_item.php'); ?>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/my_project_item.php'); ?>
                </section>
                <section>
                    <div class="section-header">
                        <h3 class="section-title">정식등록 대기중 프로젝트</h3>
                        <a href="#" class="btn btn-default btn-sm">더보기</a>
                    </div>
                    <p class="nothing">검색된 프로젝트가 없습니다.</p>
                </section>
                <section>
                    <div class="section-header">
                        <h3 class="section-title">수정 후 승인대기중 프로젝트</h3>
                        <a href="#" class="btn btn-default btn-sm">더보기</a>
                    </div>
                    <p class="nothing">검색된 프로젝트가 없습니다.</p>
                </section>
                <section>
                    <div class="section-header">
                        <h3 class="section-title">등록기간 만료 프로젝트</h3>
                        <a href="#" class="btn btn-default btn-sm">더보기</a>
                    </div>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/my_project_item.php'); ?>
                </section>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docjs.php'); ?>
    
</body>
</html>