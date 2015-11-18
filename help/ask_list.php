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
                <div class="search-box">
                    <form action="#" method="post">
                        <p class="category">
                            <select name="">
                                <option value="">전체보기</option>
                            </select>
                        </p>
                        <p class="keyword">
                            <label class="sr-only" for="board-keyword"></label>
                            <input id="board-keyword" type="text" name="">
                        </p>
                        <button class="btn btn-primary btn-sm" type="submit">검색하기</button>
                    </form>
                </div>
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