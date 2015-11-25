<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
    <title>WAWA VENTURES</title> 
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/member.css" rel="stylesheet">
</head>
<body class="member">
    <a href="#content" class="skip sr-only sr-only-focusable">컨텐츠로 건너뛰기</a>
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
        <main id="content" class="find">
            <div class="container">
                <div>
                    <div class="form-content">
                        <div class="page-header">
                            <h2 class="page-title">비밀번호 찾기</h2>
                            <p>
                                회원가입 시 등록하신 이메일을 입력해 주세요.<br>
                                이메일로 임시 비밀번호를 발송해드립니다.
                            </p>
                        </div>
                        <div class="form-wrap">
                            <form action="#" method="post">
                                <p>
                                    <label><input type="email" name="" placeholder="이메일"></label>
                                </p>
                                <div class="btn-area">
                                    <p>
                                        <button class="btn btn-primary btn-block btn-lg" type="submit">확인</button>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docjs.php'); ?>
    
</body>
</html>