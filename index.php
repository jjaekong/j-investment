<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
    <title>WAWA VENTURES</title> 
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
</head>
<body class="main">
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
        <main id="content">
            <section id="introduce">
                소개 비주얼
            </section>
            <section id="record">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h2><span class="icon-circle"><i class="icon-database"></i></span>누적투자액</h2>
                            <strong>123,456,789만원</strong>
                        </div>
                        <div class="col-sm-4">
                            <h2><span class="icon-circle"><i class="icon-chart-line"></i></span>평균수익률</h2>
                            <strong>9.23%</strong>
                        </div>
                        <div class="col-sm-4">
                            <h2><span class="icon-circle"><i class="icon-users"></i></span>누적 투자자 수</h2>
                            <strong>1,234명</strong>
                        </div>
                    </div>
                </div>
            </section>
            <section id="recommend">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="section-header">추천 프로젝트</h2>
                        </div>
                        <div class="col-md-4">
                            <article>
                                <div class="figure"></div>
                                <div class="details">
                                    <h3>Sleep Doc : 꿀잠자게 해드려요!</h3>
                                    <p>수면 장애, 불면증을 개선시켜주는 Sleep-doc(슬립닥)은 수면장애 때문에 늘 잠이 부족한 사람들의</p>
                                </div>
                                <div class="tags">
                                    <ul>
                                        <li><a href="#"><i class="icon-tag"></i>서울특별시</a></li>
                                        <li><a href="#"><i class="icon-tag"></i>테크</a></li>
                                    </ul>
                                </div>
                                <div class="status">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <dl>
                                                <dd>17,138,900</dd>
                                                <dt>참여금액</dt>
                                            </dl>
                                        </div>
                                        <div class="col-sm-3">
                                            <dl>
                                                <dd>309</dd>
                                                <dt>참여금액</dt>
                                            </dl>
                                        </div>
                                        <div class="col-sm-3">
                                            <dl>
                                                <dd>43</dd>
                                                <dt>남은기간</dt>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress">
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article>
                                <h3>TEST</h3>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article>
                                <h3>TEST</h3>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <!--
            <section id="popular">
                <h2>인기 프로젝트</h2>
            </section>
            <section id="category">
                <h2>카테고리</h2>
            </section>
            <section id="sponsor">
                <h2>스폰서</h2>
            </section>
            <section id="begin">
                지금 바로 시작해보세요!
            </section>
            -->
        </main>

        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docjs.php'); ?>
    
</body>
</html>