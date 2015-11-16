<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
    <title>WAWA VENTURES</title> 
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/board.css" rel="stylesheet">
    <link href="/css/iframe.css" rel="stylesheet">
</head>
<body class="board" data-target-frame="process-frame">
    <div class="list">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>제목</th>
                        <th>등록일</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left"><a href="#">2013년 올 한해만 1000명의 어린이들이 질병의 고통에서 벋어났습니다.</a></td>
                        <td><time datetime="2015-10-19">2015-10-19</time></td>
                    </tr>
                    <tr>
                        <td class="text-left"><a href="#">여러분들의 작은 손길이 없었다면 어떻게 되었을까요?</a></td>
                        <td><time datetime="2015-10-19">2015-10-19</time></td>
                    </tr>
                    <tr>
                        <td class="text-left"><a href="#">아프리카의 아이들.</a></td>
                        <td><time datetime="2015-10-19">2015-10-19</time></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/paging.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docjs.php'); ?>
    <script src="/js/lib/iframeResizing.js"></script>
</body>
</html>