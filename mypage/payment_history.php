<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
    <title>WAWA VENTURES</title> 
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/board.css" rel="stylesheet">
    <link href="/css/mypage.css" rel="stylesheet">
    <link href="/js/lib/jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet">
</head>
<body class="mypage">
    <a href="#content" class="skip sr-only sr-only-focusable">컨텐츠로 건너뛰기</a>
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
        <main id="content" class="payment-history board">
            <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/path.php'); ?>
            <div class="container">
                <div class="page-header">
                    <h2 class="page-title">프로젝트 결제내역</h2>
                    <p>결제한 프로젝트 내역을 확인할 수 있습니다.</p>
                </div>
                <div class="overview">
                    <ul class="row">
                        <li class="col-xs-4 col-sm-2">
                            <a class="active" href="#">
                                <h4>결제요망<i class="icon-angle-right"></i></h4>
                                <p><strong>3</strong></p>
                            </a>
                        </li>
                        <li class="col-xs-4 col-sm-2">
                            <a href="#">
                                <h4>결제완료<i class="icon-angle-right"></i></h4>
                                <p><strong>3</strong></p>
                            </a>
                        </li>
                        <li class="col-xs-4 col-sm-2">
                            <a href="#">
                                <h4>후원성공<i class="icon-angle-right"></i></h4>
                                <p><strong>3</strong></p>
                            </a>
                        </li>
                        <li class="col-xs-4 col-sm-2">
                            <a href="#">
                                <h4>정산완료<i class="icon-angle-right"></i></h4>
                                <p><strong>3</strong></p>
                            </a>
                        </li>
                        <li class="col-xs-4 col-sm-2">
                            <a href="#">
                                <h4>후원실패<i class="icon-angle-right"></i></h4>
                                <p><strong>3</strong></p>
                            </a>
                        </li>
                        <li class="col-xs-4 col-sm-2">
                            <a href="#">
                                <h4>환불완료<i class="icon-angle-right"></i></h4>
                                <p><strong>3</strong></p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="search-area">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-xs-6 col-sm-3 col-md-2">
                                <select name="">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-2">
                                <select name="">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-2">
                                <input class="datepicker" type="text" name="" placeholder="날짜선택">
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-2">
                                <input class="datepicker" type="text" name="" placeholder="날짜선택">
                            </div>
                            <div class="col-xs-8 col-sm-10 col-md-3">
                                <input type="text" name="">
                            </div>
                            <div class="col-xs-4 col-sm-2 col-md-1">
                                <button type="submit" class="btn btn-primary btn-sm btn-block">검색</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="list">
                    <div class="row summary">
                        <div class="col-xs-12 col-sm-6 count">
                            <p>총 <strong>415</strong>개의 프로젝트가 있습니다.</p>
                        </div>
                        <div class="col-xs-12 col-sm-6 price">
                            <p>총합산금액 <strong>17,138,900</strong>원</p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th colspan="2">프로젝트 정보</th>
                                    <th>총금액</th>
                                    <th>결제방법</th>
                                    <th>처리현황</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>20</td>
                                    <td class="figure"><div style="background-image: url(/images/dummy/img_project_figure1.jpg);"></div></td>
                                    <td class="details">
                                        <h4>Sleep Doc : 꿀잠자게 해드려요! Sleep Doc : 꿀잠자게 해드려요!</h4>
                                        <div>
                                            <dl class="price">
                                                <dt>리워드 금액</dt>
                                                <dd><strong>20,000</strong>원</dd>
                                            </dl>
                                            <dl class="count">
                                                <dt>수량</dt>
                                                <dd><strong>14</strong>건</dd>
                                            </dl>
                                        </div>
                                        <div>
                                            <dl class="date">
                                                <dt>작성일</dt>
                                                <dd class="colon" role="separator">:</dd>
                                                <dd><time datetime="2013-07-05 18:21:05">2013-07-05 18:21:05</time></dd>
                                            </dl>
                                        </div>
                                    </td>
                                    <td class="price"><strong>250,000</strong>원</td>
                                    <td class="paytype">무통장입금</td>
                                    <td class="status"><span class="status-3">결제요망</span></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td class="figure"><div style="background-image: url(/images/dummy/img_project_figure2.jpg);"></div></td>
                                    <td class="details">
                                        <h4>Sleep Doc : 꿀잠자게 해드려요! Sleep Doc : 꿀잠자게 해드려요!</h4>
                                        <div>
                                            <dl class="price">
                                                <dt>리워드 금액</dt>
                                                <dd><strong>20,000</strong>원</dd>
                                            </dl>
                                            <dl class="count">
                                                <dt>수량</dt>
                                                <dd><strong>14</strong>건</dd>
                                            </dl>
                                        </div>
                                        <div>
                                            <dl class="date">
                                                <dt>작성일</dt>
                                                <dd class="colon" role="separator">:</dd>
                                                <dd><time datetime="2013-07-05 18:21:05">2013-07-05 18:21:05</time></dd>
                                            </dl>
                                        </div>
                                    </td>
                                    <td class="price"><strong>250,000</strong>원</td>
                                    <td class="paytype">무통장입금</td>
                                    <td class="status"><span class="status-2">결제요망</span></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td class="figure"><div style="background-image: url(/images/dummy/img_project_figure3.jpg);"></div></td>
                                    <td class="details">
                                        <h4>Sleep Doc : 꿀잠자게 해드려요! Sleep Doc : 꿀잠자게 해드려요!</h4>
                                        <div>
                                            <dl class="price">
                                                <dt>리워드 금액</dt>
                                                <dd><strong>20,000</strong>원</dd>
                                            </dl>
                                            <dl class="count">
                                                <dt>수량</dt>
                                                <dd><strong>14</strong>건</dd>
                                            </dl>
                                        </div>
                                        <div>
                                            <dl class="date">
                                                <dt>작성일</dt>
                                                <dd class="colon" role="separator">:</dd>
                                                <dd><time datetime="2013-07-05 18:21:05">2013-07-05 18:21:05</time></dd>
                                            </dl>
                                        </div>
                                    </td>
                                    <td class="price"><strong>250,000</strong>원</td>
                                    <td class="paytype">무통장입금</td>
                                    <td class="status"><span class="status-1">결제요망</span></td>
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
    <script>
        (function() {
            $(document).on('focus', '.search-area .datepicker', function() {
                $(this).datepicker({
                    dateFormat: 'yy-mm-dd',
                    showMonthAfterYear: true,
                    yearSuffix: '년',
                    dayNames: ['일요일', '월요일', '화요일', '수요일', '목요일', '금요일', '토요일'],
                    dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
                    monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                    monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월']
                });
            });
        })(jQuery);
    </script>
    
</body>
</html>