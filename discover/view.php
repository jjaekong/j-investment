<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
    <title>WAWA VENTURES</title> 
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/discover.css" rel="stylesheet">
    <link href="/css/board.css" rel="stylesheet">
</head>
<body class="discover">
    <a href="#content" class="skip sr-only sr-only-focusable">컨텐츠로 건너뛰기</a>
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
        <main id="content" class="view board">
            <section class="overview">
                <div class="container">
                    <h2>Sleep Doc : 꿀잠자게 해드려요!</h2>
                    <p>
                        수면 장애, 불면증을 개선시켜주는 지능형 웨어러블 밴드 Sleep-doc! Sleep-doc(슬립닥)은 수면장애 때문에 늘 잠이 부족한 사람들의 라이프스타일을 개선 코칭하여 숙면을 취하도록 유도해줍니다. 이젠 Sleep-doc으로 꿀잠 자세요!
                    </p>
                    <ul class="tags">
                        <li><i class="icon-location"></i> 서울특별시</li>
                        <li><i class="icon-tag"></i> 나눔/공익</li>
                    </ul>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div class="figure">
                            <ul>
                                <li>
                                    <img class="img-responsive" src="/images/dummy/img_project_slide.jpg">
                                </li>
                                <li>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe src="http://player.vimeo.com/video/17914974" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                    </div>
                                </li>
                            </ul>
                            <div class="controls">
                                <a class="prev" href="#"><i class="icon-left-open-big"></i></a>
                                <a class="next" href="#"><i class="icon-right-open-big"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <section class="stats">
                            <div class="goal">
                                <div class="rate rate-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    80<small>%</small> <span class="sr-only">완료</span>
                                </div>
                                <div class="money">
                                    <h3>17,138,900<small>원</small></h3>
                                    <p>(목표금액 : 10,000,000원)</p>
                                </div>
                            </div>
                            <div class="involved">
                                <dl>
                                    <dt>참여인원</dt>
                                    <dd><strong>309</strong>명</dd>
                                </dl>
                            </div>
                            <div class="remain">
                                <dl>
                                    <dt>남은기간</dt>
                                    <dd><strong>7</strong>일</dd>
                                </dl>
                            </div>
                            <div class="period">
                                <dl>
                                    <dt>프로젝트 진행기간</dt>
                                    <dd class="colon" role="separator">:</dd>
                                    <dd>
                                        <time datetime="2015-08-25">2015. 08. 25</time>
                                        <span aria-hidden="true" role="presentation">~</span>
                                        <time datetime="2015-09-25">2015. 09. 25</time>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        <a href="#" class="btn btn-primary btn-lg btn-block btn-involved">프로젝트 참여하기</a>
                        <div class="profile">
                            <div class="picture"></div>
                            <div class="author">
                                <strong>개설자 이름</strong>
                                <ul>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                </ul>
                                <p>프로젝트 개설자의 한줄 인사말 노출영역입니다.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8">
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation"><a href="#introduce" aria-controls="introduce" role="tab" data-toggle="tab"><span class="hidden-xs">프로젝트 </span>소개</a></li>
                            <li role="presentation"><a href="#process" aria-controls="process" role="tab" data-toggle="tab">진행과정(10)</a></li>
                            <li role="presentation"><a href="#sponsors" aria-controls="sponsors" role="tab" data-toggle="tab">후원자(220)</a></li>
                            <li role="presentation" class="active"><a href="#comment" aria-controls="comments" role="tab" data-toggle="tab">댓글(502)</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane" id="introduce">
                                <img style="margin: 20px auto;" class="img-responsive" src="/images/dummy/img_project_intro.jpg">
                            </div>
                            <div role="tabpanel" class="tab-pane" id="process">
                                <iframe id="process-frame" src="/board/list.php" width="100%" scrolling="no"></iframe>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="sponsors">
                                <p class="score">현재 <i>6</i>명이 후원하고 있습니다.</p>
                                <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/sponsor_info.php'); ?>
                                <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/sponsor_info.php'); ?>
                                <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/sponsor_info.php'); ?>
                                <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/paging.php'); ?>
                            </div>
                            <div role="tabpanel" class="tab-pane active" id="comment">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-xs-3 col-sm-2"><label for="comment-title">제목</label></div>
                                        <div class="col-xs-9 col-sm-5"><input id="comment-title" type="text" name=""></div>
                                        <div class="col-xs-3 col-sm-2"><label for="comment-pw">비밀번호</label></div>
                                        <div class="col-xs-9 col-sm-3"><input id="comment-pw" type="password" name=""></div>
                                        <div class="col-xs-3 col-sm-2">내용</div>
                                        <div class="col-xs-9 col-sm-10">
                                            <textarea name="" cols="50" rows="3"></textarea>
                                        </div>
                                        <div class="col-xs-3 col-sm-2"><label for="comment-captcha">도배방지</label></div>
                                        <div class="col-xs-9 col-sm-7">
                                            <input id="comment-captcha" type="text" name="">
                                            <p class="help inline"><img src="/images/dummy/img_captcha.gif"></p>
                                            <p class="help inline">보이는 도배방지키를 입력하세요.</p>
                                        </div>
                                        <div class="col-xs-4 col-xs-push-3 col-sm-3 col-sm-push-0"><button class="btn btn-primary btn-block btn-sm" type="submit">등록하기</button></div>
                                    </div>
                                </form>
                                <div class="list">
                                    <ul>
                                        <li>
                                            <div class="comment-item">
                                                <strong class="comment-writer">작성자</strong>
                                                <p class="comment-title">저도 작지만 돕고 싶어요</p>
                                                <div class="comment-details">
                                                    좋은 프로젝트네요 ^^<br>
                                                    성공하시고 아프리카의 어린이들이 조금이라도 나은 삶을 살았으면 좋겠습니다
                                                    <time datetime="2013-07-09 10:10:55">(2013-07-09 10:10:55)</time>
                                                </div>                                                
                                                <div class="btn-area">
                                                    <p class="pull-left">
                                                        <a href="#" class="btn btn-link btn-sm btn-up"><i class="icon-thumbs-up"></i><span class="sr-only">좋아요</span> 10</a>
                                                        <a href="#" class="btn btn-link btn-sm btn-down"><i class="icon-thumbs-down"></i><span class="sr-only">싫어요</span> 5</a>
                                                    </p>
                                                    <p class="pull-right">
                                                        <a href="#" class="btn btn-default btn-sm btn-reply">의견등록</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="repy-item">
                                                <i class="icon-level-down"></i>
                                                <strong class="reply-title">댓글타이틀 영역입니다.</strong>
                                                <strong class="reply-writer">작성자명</strong>
                                                <p class="reply-details">
                                                    성공하시고 아프리카의 어린이들이 조금이라도 나은 삶을 살았으면 좋겠습니다.
                                                    <time datetime="2013-07-09 10:10:55">(2013-07-09 10:10:55)</time>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment-item">
                                                <strong class="comment-writer">작성자</strong>
                                                <p class="comment-title">저도 작지만 돕고 싶어요</p>
                                                <div class="comment-details">
                                                    좋은 프로젝트네요 ^^<br>
                                                    성공하시고 아프리카의 어린이들이 조금이라도 나은 삶을 살았으면 좋겠습니다
                                                    <time datetime="2013-07-09 10:10:55">(2013-07-09 10:10:55)</time>
                                                </div>
                                                <div class="btn-area">
                                                    <p class="pull-left">
                                                        <a href="#" class="btn btn-link btn-sm btn-up"><i class="icon-thumbs-up"></i><span class="sr-only">좋아요</span> 10</a>
                                                        <a href="#" class="btn btn-link btn-sm btn-down"><i class="icon-thumbs-down"></i><span class="sr-only">싫어요</span> 5</a>
                                                    </p>
                                                    <p class="pull-right">
                                                        <a href="#" class="btn btn-default btn-sm btn-reply">의견등록</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment-item">
                                                <strong class="comment-writer">작성자</strong>
                                                <p class="comment-title">저도 작지만 돕고 싶어요 저도 작지만 돕고 싶어요 저도 작지만 돕고 싶어요 저도 작지만 돕고 싶어요</p>
                                                <div class="comment-details">
                                                    좋은 프로젝트네요 ^^<br>
                                                    성공하시고 아프리카의 어린이들이 조금이라도 나은 삶을 살았으면 좋겠습니다
                                                    <time datetime="2013-07-09 10:10:55">(2013-07-09 10:10:55)</time>
                                                </div>
                                                <div class="btn-area">
                                                    <p class="pull-left">
                                                        <a href="#" class="btn btn-link btn-sm btn-up"><i class="icon-thumbs-up"></i><span class="sr-only">좋아요</span> 10</a>
                                                        <a href="#" class="btn btn-link btn-sm btn-down"><i class="icon-thumbs-down"></i><span class="sr-only">싫어요</span> 5</a>
                                                    </p>
                                                    <p class="pull-right">
                                                        <a href="#" class="btn btn-default btn-sm btn-reply">의견등록</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/paging.php'); ?>
                            </div>
                        </div>
                        <section class="visible-lg-block cheer">
                            <h5>응원하기</h5>
                            <p>프로젝트 개설자에게 응원의 메세지를 보내주세요!<br>여러분의 응원이 큰 힘이 됩니다.</p>
                            <a href="#" class="btn btn-primary btn-lg">응원하러 바로가기</a>
                        </section>
                        <section class="visible-lg-block help-desk">
                            <h5>고객센터</h5>
                            <p>프로젝트에 관한 궁금한 사항이 있으신가요?<br>JLK에서 친절히 상담해 드리겠습니다.</p>
                            <a href="#" class="btn btn-default btn-lg">고객센터 바로가기</a>
                        </section>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <section class="reward">
                            <h3>보상품 목록</h3>
                            <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/reward_item.php'); ?>
                            <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/reward_item.php'); ?>
                            <div class="caution">
                                <p>프로젝트에 참여하시더라도 목표금액 미달성 시 전액 환불되며 리워드는 지급
되지 않습니다. 본 프로젝트는 <strong>정식 체결</strong>되었음을 알려드립니다.</p>
                            </div>
                        </section>
                        <div class="ask">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="btn btn-primary btn-bg btn-block">문의하기</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" class="btn btn-default btn-bg btn-block">신고하기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docjs.php'); ?>
    <script src="/js/lib/jquery.bxslider.js"></script>
    <script src="/js/app/discover.js"></script>
    
</body>
</html>