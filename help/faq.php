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
        <main id="content" class="faq board">
            <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/path.php'); ?>
            <div class="container">
                <div class="page-header">
                    <h2 class="page-title">자주묻는 질문</h2>
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
                    <ul>
                        <li>
                            <a href="#">
                                <i class="icon-circle" role="presentation">Q</i> 하나의 사업자등록증으로 여러개의 사이트를 운용하고 싶습니다. 어떻게 하면되나요 <i class="icon-angle-up"></i>
                            </a>
                            <div>
                                <i class="icon-circle" role="presentation">A</i>
                                <div>
                                    네 가능합니다.^^<br>
                                    각 사이트에 동일한 사업자정보를 입력해주시면 됩니다.<br>
                                    <br>
                                    단 PG사를 사용하시기 위해서는 사이트별로 다른 머천트 아이디를 발급받아야 합니다.<br>
                                    결제연동 작업은 아래 링크를 참조해주시면 되겠습니다.<br>
                                    http://www.cgimall.co.kr/normal_html.cgi?file=pg<br>
                                    <br>
                                    SMS서비스의 경우는 한개의 아이디로 다수 사이트를 동시 이용을 하시거나 사이트별로 다른 SMS아이디를 발급받아서 이용하실수 있습니다<br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-circle" role="presentation">Q</i> 하나의 사업자등록증으로 여러개의 사이트를 운용하고 싶습니다. 어떻게 하면되나요 <i class="icon-angle-down"></i>
                            </a>
                            <div>
                                <i class="icon-circle" role="presentation">A</i>
                                <div>
                                    네 가능합니다.^^<br>
                                    각 사이트에 동일한 사업자정보를 입력해주시면 됩니다.<br>
                                    <br>
                                    단 PG사를 사용하시기 위해서는 사이트별로 다른 머천트 아이디를 발급받아야 합니다.<br>
                                    결제연동 작업은 아래 링크를 참조해주시면 되겠습니다.<br>
                                    http://www.cgimall.co.kr/normal_html.cgi?file=pg<br>
                                    <br>
                                    SMS서비스의 경우는 한개의 아이디로 다수 사이트를 동시 이용을 하시거나 사이트별로 다른 SMS아이디를 발급받아서 이용하실수 있습니다<br>
                                </div>
                            </div>
                        </li>
                        <li>
                            
                            <a href="#">
                                <i class="icon-circle" role="presentation">Q</i> 하나의 사업자등록증으로 여러개의 사이트를 운용하고 싶습니다. 어떻게 하면되나요 <i class="icon-angle-down"></i>
                            </a>
                            <div>
                                <i class="icon-circle" role="presentation">A</i>
                                <div>
                                    네 가능합니다.^^<br>
                                    각 사이트에 동일한 사업자정보를 입력해주시면 됩니다.<br>
                                    <br>
                                    단 PG사를 사용하시기 위해서는 사이트별로 다른 머천트 아이디를 발급받아야 합니다.<br>
                                    결제연동 작업은 아래 링크를 참조해주시면 되겠습니다.<br>
                                    http://www.cgimall.co.kr/normal_html.cgi?file=pg<br>
                                    <br>
                                    SMS서비스의 경우는 한개의 아이디로 다수 사이트를 동시 이용을 하시거나 사이트별로 다른 SMS아이디를 발급받아서 이용하실수 있습니다<br>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/paging.php'); ?>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docjs.php'); ?>
    <script>
        (function($) {
            // 질문 클릭 시
            $(document).on('click', '.faq .list li > a', function() {
                $listItem = $(this).parent();
                $statIcon = $(this).find('> i:eq(1)');
                if ($listItem.hasClass('opened')) {
                    $listItem.removeClass('opened');
                    $statIcon.removeClass('icon-angle-up icon-angle-down').addClass('icon-angle-down');
                } else {
                    $listItem.addClass('opened');
                    $statIcon.removeClass('icon-angle-up icon-angle-down').addClass('icon-angle-up');
                }
                return false;
            });
        })(jQuery);
    </script>
    
</body>
</html>