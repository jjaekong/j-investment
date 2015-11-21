<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
    <title>WAWA VENTURES</title> 
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/mypage.css" rel="stylesheet">
</head>
<body class="mypage">
    <a href="#content" class="skip sr-only sr-only-focusable">컨텐츠로 건너뛰기</a>
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
        <main id="content" class="favorite">
            <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/path.php'); ?>
            <div class="container">
                <div class="page-header">
                    <h2 class="page-title">찜한 프로젝트</h2>
                    <p>내가 스크랩한 프로젝트를 확인합니다. 선택삭제 클릭시 선택한 정보를 한번에 삭제합니다.</p>
                </div>
                <div class="btn-area">
                    <p>
                        <button type="button" class="btn btn-default btn-sm"><i class="icon-check"></i> 전체선택</button>
                        <button type="button" class="btn btn-default btn-sm"><i class="icon-cancel"></i> 선택삭제</button>
                    </p>
                </div>
                <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="menu">
                        <p>
                            <input type="checkbox" name="" value="">
                            <button type="button" class="btn btn-link"><i class="icon-cancel"></i></button>
                        </p>
                    </div>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="menu">
                        <p>
                            <input type="checkbox" name="" value="">
                            <button type="button" class="btn btn-link"><i class="icon-cancel"></i></button>
                        </p>
                    </div>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="menu">
                        <p>
                            <input type="checkbox" name="" value="">
                            <button type="button" class="btn btn-link"><i class="icon-cancel"></i></button>
                        </p>
                    </div>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="menu">
                        <p>
                            <input type="checkbox" name="" value="">
                            <button type="button" class="btn btn-link"><i class="icon-cancel"></i></button>
                        </p>
                    </div>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="menu">
                        <p>
                            <input type="checkbox" name="" value="">
                            <button type="button" class="btn btn-link"><i class="icon-cancel"></i></button>
                        </p>
                    </div>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="menu">
                        <p>
                            <input type="checkbox" name="" value="">
                            <button type="button" class="btn btn-link"><i class="icon-cancel"></i></button>
                        </p>
                    </div>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="menu">
                        <p>
                            <input type="checkbox" name="" value="">
                            <button type="button" class="btn btn-link"><i class="icon-cancel"></i></button>
                        </p>
                    </div>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="menu">
                        <p>
                            <input type="checkbox" name="" value="">
                            <button type="button" class="btn btn-link"><i class="icon-cancel"></i></button>
                        </p>
                    </div>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="menu">
                        <p>
                            <input type="checkbox" name="" value="">
                            <button type="button" class="btn btn-link"><i class="icon-cancel"></i></button>
                        </p>
                    </div>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="menu">
                        <p>
                            <input type="checkbox" name="" value="">
                            <button type="button" class="btn btn-link"><i class="icon-cancel"></i></button>
                        </p>
                    </div>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="menu">
                        <p>
                            <input type="checkbox" name="" value="">
                            <button type="button" class="btn btn-link"><i class="icon-cancel"></i></button>
                        </p>
                    </div>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="menu">
                        <p>
                            <input type="checkbox" name="" value="">
                            <button type="button" class="btn btn-link"><i class="icon-cancel"></i></button>
                        </p>
                    </div>
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/project_item.php'); ?>
                </div>
            </div>
                <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/paging.php'); ?>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docjs.php'); ?>
    
</body>
</html>