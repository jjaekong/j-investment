<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
    <title>WAWA VENTURES</title> 
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/member.css" rel="stylesheet">
</head>
<body class="member">
    <a href="#content" class="skip sr-only sr-only-focusable">컨텐츠로 건너뛰기</a>
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
        <main id="content" class="join">
            <div class="container">
                <div>
                    <div class="join-form">
                        <div class="page-header">
                            <h2 class="page-title">회원가입</h2>
                            <p>회원가입 후 와와벤쳐스의 다양한 서비스를 이용하세요.</p>
                        </div>
                        <div class="form-wrap">
                            <form action="#" method="post">
                                <p>
                                    <label><input type="text" name="" placeholder="이름"></label>
                                </p>
                                <p>
                                    <label><input type="email" name="" placeholder="이메일"></label>
                                </p>
                                <p>
                                    <label><input type="email" name="" placeholder="이메일 확인"></label>
                                </p>
                                <p>
                                    <label><input type="password" name="" placeholder="비밀번호"></label>
                                </p>
                                <p>
                                    <label><input type="password" name="" placeholder="비밀번호 확인"></label>
                                </p>
                                <div class="agreement">
                                    <p>
                                        <label>
                                            <input type="checkbox" name="" value="">
                                            와와벤쳐스의 이벤트 및 소식을 만나겠습니다.<br>
                                            회원가입 버튼을 누름으로써 <i>이용약관</i>, <i>개인정보보호정책</i>, <i>쿠키정책</i>에 
                                            동의합니다.
                                        </label>
                                    </p>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <button class="btn btn-primary btn-block btn-lg" type="submit">회원가입</button>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <section class="connect-fb">
                            <h3><span>소셜회원가입</span></h3>
                            <div class="bar" role="presentation"></div>
                            <p><a href="#" class="btn btn-block btn-connect-fb btn-lg"><i class="icon-facebook"></i>페이스북으로 연결하기</a></p>
                            <p class="help">와와벤쳐스는 회원의 허락없이 페이스북에 어떠한 게시물도 보내지 않습니다.</p>
                        </section>
                    </div>
                    <div class="go-login">
                        <p>와와벤쳐스 회원이신가요? <a href="#">로그인</a></p>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docjs.php'); ?>
    
</body>
</html>