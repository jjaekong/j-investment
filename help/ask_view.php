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
                <section class="view">
                    <div class="header">
                        <h3 class="title">아, 그리구요 지난번에 쿠폰 받았는데</h3>
                        <time datetime="2014-05-16 09:55:03">2014-05-16 09:55:03</time>
                    </div>
                    <div class="info">
                        <div class="writer">
                            <dl>
                                <dt>작성자</dt>
                                <dd class="colon" role="separator">:</dd>
                                <dd>김지영</dd>
                            </dl>
                        </div>
                        <div class="counter">
                            <dl class="hit">
                                <dt>조회</dt>
                                <dd class="colon" role="separator">:</dd>
                                <dd>14</dd>
                            </dl>
                            <dl class="recom">
                                <dt>추천</dt>
                                <dd class="colon" role="separator">:</dd>
                                <dd>0</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="details">
                        <div>
                            내용
                        </div>
                    </div>
                    <div class="answer">
                        <h4>관리자 답변</h4>
                        <div class="answer-content">
                            답변 내용
                        </div>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a class="btn btn-default" href="#">신고하기</a>
                            <a class="btn btn-default" href="#">추천하기</a>
                            <a class="btn btn-default" href="#">답글하기</a>
                            <a class="btn btn-default" href="#">삭제하기</a>
                            <a class="btn btn-default" href="#">수정하기</a>
                            <a class="btn btn-primary" href="#">목록보기</a>
                        </p>
                    </div>
                </section>
                <div class="list">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>작성자</th>
                                    <th>등록일</th>
                                    <th>추천</th>
                                    <th>조회</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td class="text-left"><a href="#">sns 로그인만으로 글쓰기가 되네요 편리하네요 ^^ <span>(1)</span></a><i class="icon-lock"></i></td>
                                    <td>홍길동</td>
                                    <td><time datetime="2015-10-19">2015-10-19</time></td>
                                    <td>1</td>
                                    <td>123</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="text-left"><i class="reply icon-level-down"></i><a href="#">sns 로그인만으로 글쓰기가 되네요 편리하네요 ^^ <span>(1)</span></a><i class="icon-lock"></i></td>
                                    <td>홍길동</td>
                                    <td><time datetime="2015-10-19">2015-10-19</time></td>
                                    <td>1</td>
                                    <td>123</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="text-left"><a href="#">sns 로그인만으로 글쓰기가 되네요 편리하네요 ^^ <span>(1)</span></a></td>
                                    <td>홍길동</td>
                                    <td><time datetime="2015-10-19">2015-10-19</time></td>
                                    <td>1</td>
                                    <td>123</td>
                                </tr>
                            </tbody>
                        </table>
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