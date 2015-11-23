<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
    <title>WAWA VENTURES</title> 
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/member.css" rel="stylesheet">
</head>
<body class="member">
    <a href="#content" class="skip sr-only sr-only-focusable">컨텐츠로 건너뛰기</a>
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
        <main id="content" class="login">
            <div class="container">
                <div>
                    <div class="form-content">
                        <div class="page-header">
                            <h2 class="page-title">로그인</h2>
                            <p>다양한 서비스를 이용하시려면 로그인을 해주세요.</p>
                        </div>
                        <div class="form-wrap">
                            <form action="#" method="post">
                                <p>
                                    <label><input type="text" name="" placeholder="아이디"></label>
                                </p>
                                <p>
                                    <label><input type="password" name="" placeholder="비밀번호"></label>
                                </p>
                                <div class="util">
                                    <p class="save">
                                        <label>
                                            <input type="checkbox" name="" value=""> 아이디기억
                                        </label>
                                    </p>
                                    <p class="find">
                                        <a href="#">아이디 / 비밀번호 찾기</a>
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
                            <h3><span>소셜로그인</span></h3>
                            <div class="bar" role="presentation"></div>
                            <p><a href="#" class="btn btn-block btn-connect-fb btn-lg"><i class="icon-facebook"></i>페이스북으로 로그인</a></p>
                        </section>
                    </div>
                    <div class="go-join">
                        <p>아직 회원이 아니신가요? <a href="#">회원가입</a></p>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docjs.php'); ?>
    
</body>
</html>