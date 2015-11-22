<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
    <title>WAWA VENTURES</title> 
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/mypage.css" rel="stylesheet">
</head>
<body class="mypage">
    <a href="#content" class="skip sr-only sr-only-focusable">컨텐츠로 건너뛰기</a>
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
        <main id="content" class="result">
            <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/path.php'); ?>
            <div class="container">
                <div class="page-header">
                    <h2 class="page-title">나의 후원성공 &amp; 후원실패</h2>
                    <p>등록하신 프로젝트의 후원성공/정산완료/후원실패/환불완료 리스트를 확인할 수 있습니다.</p>
                </div>
                <div class="overview">
                    <ul class="row">
                        <li class="col-xs-6 col-sm-3">
                            <a class="active" href="#">
                                <h4>후원성공 프로젝트</h4>
                                <div>
                                    <p>10,000,000<small>원</small></p>
                                    <strong>3</strong>
                                </div>
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-3">
                            <a href="#">
                                <h4>정산완료 프로젝트</h4>
                                <div>
                                    <p>10,000,000<small>원</small></p>
                                    <strong>3</strong>
                                </div>
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-3">
                            <a href="#">
                                <h4>후원실패 프로젝트</h4>
                                <div>
                                    <p>10,000,000<small>원</small></p>
                                    <strong>3</strong>
                                </div>
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-3">
                            <a href="#">
                                <h4>환불완료 프로젝트</h4>
                                <div>
                                    <p>10,000,000<small>원</small></p>
                                    <strong>3</strong>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <section class="list">
                    <div class="section-header">
                        <h3 class="section-title">후원성공 프로젝트</h3>
                    </div>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/my_project_item.php'); ?>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/my_project_item.php'); ?>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/my_project_item.php'); ?>
                </section>
                <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/paging.php'); ?>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docjs.php'); ?>
    
</body>
</html>