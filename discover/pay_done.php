<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
    <title>WAWA VENTURES</title> 
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/discover.css" rel="stylesheet">
</head>
<body class="discover">
    <a href="#content" class="skip sr-only sr-only-focusable">컨텐츠로 건너뛰기</a>
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
        <main id="content" class="pay-done">
            <div class="container">
                <section class="message">
                    <h2>프로젝트 참여가 <i>완료</i> 되었습니다.</h2>
                    <div>
                        <p>
                            결제가 성공적으로 완료되었습니다.
                            프로젝트 후원결제일 경우 프로젝트 결제내역에서 확인가능합니다.
                            유료옵션 결제일 경우 유료옵션 결제내역에서 확인가능합니다.
                            결제와 관련해서 궁금하신 점은 게시판 문의를 통해 문의해 주시기 바랍니다.
                        </p>
                        <p>
                            [확인] 버튼을 클릭하면 메인으로 이동합니다.
                        </p>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-primary btn-lg">확인</a>
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docjs.php'); ?>
    <script src="/js/lib/jquery.bxslider.js"></script>
    <script src="/js/app/discover.js"></script>
    
</body>
</html>