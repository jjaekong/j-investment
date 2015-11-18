<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
    <title>WAWA VENTURES</title> 
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/help.css" rel="stylesheet">
    <link href="/css/board.css" rel="stylesheet">
</head>
<body class="help">
    <a href="#content" class="skip sr-only sr-only-focusable">컨텐츠로 건너뛰기</a>
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
        <main id="content" class="ask board">
            <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/path.php'); ?>
            <div class="container">
                <div class="page-header">
                    <h2 class="page-title">문의하기</h2>
                    <p>고객님의 궁금한 사항을 빠르게 해결해 드리겠습니다.</p>
                </div>
                <div class="write">
                    <form action="#" method="post">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>글쓴이</th>
                                        <td>무브먼트K</td>
                                    </tr>
                                    <tr>
                                        <th><label for="password">비밀번호</label></th>
                                        <td><input id="password" type="password" name=""></td>
                                    </tr>
                                    <tr>
                                        <th><label for="title">제목</label></th>
                                        <td><input id="title" type="text" name=""></td>
                                    </tr>
                                    <tr>
                                        <th>파일첨부1</th>
                                        <td><input type="file" name=""></td>
                                    </tr>
                                    <tr>
                                        <th>파일첨부2</th>
                                        <td><input type="file" name=""></td>
                                    </tr>
                                    <tr>
                                        <th>파일첨부3</th>
                                        <td><input type="file" name=""></td>
                                    </tr>
                                    <tr>
                                        <th>비밀글 설정</th>
                                        <td><label><input type="checkbox" name="" value=""> 비밀번호를 모르면 읽지 못합니다.</label></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div style="height: 200px;">
                                                에디터 영역(이 텍스트를 감싸고 있는 DIV는 삭제해 주세요.)
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="captcha"></label>도배방지키</th>
                                        <td>
                                            <input id="captcha" type="text" name="">
                                            <div class="captcha-word">
                                                <img src="/images/dummy/img_captcha.gif">
                                            </div>
                                            <p class="help inline">
                                                보이는 도배방지키를 입력하세요.
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-primary">등록하기</button>
                                <button type="reset" class="btn btn-default">다시쓰기</button>
                                <a href="#" class="btn btn-default">목록으로</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docjs.php'); ?>
    
</body>
</html>