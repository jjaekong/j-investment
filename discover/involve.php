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
        <main id="content" class="involve board">
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
                <form action="#" method="post">
                    <section class="reward">
                        <div class="section-header">
                            <h3 class="section-title">리워드 수령정보</h3>
                        </div>
                        <div class="reward-wrap">
                            <p class="notify"><i>*</i> 표시는 필수 입력하실 항목입니다.</p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th><i class="require">*</i><label for="name">이름</label></th>
                                            <td><input id="name" type="text" name=""></td>
                                        </tr>
                                        <tr>
                                            <th><i class="require">*</i><label for="contact">연락처</label></th>
                                            <td>
                                                <input id="contact" type="text" name="">
                                                <p class="help inline">연락이 가능한 연락처 정보를 입력해주세요.</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><i class="require">*</i><label for="email">이메일</label></th>
                                            <td>mk_manager@mkdesign.co.kr</td>
                                        </tr>
                                        <tr>
                                            <th><i class="require">*</i><label for="zipcode">우편번호</label></th>
                                            <td>
                                                <input id="zipcode" type="text" name="" readonly="readonly">
                                                <button type="button" class="btn btn-default">우편번호</button>
                                            </td>
                                        </tr>
                                        <tr class="address">
                                            <th><i class="require">*</i>상세주소</th>
                                            <td>
                                                <label>
                                                    <input id="address-1" type="text" name="">
                                                </label>
                                                <label>
                                                    <input id="address-2" type="text" name="">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="note">비고</label></th>
                                            <td>
                                                <input id="note" type="text" name="">
                                                <p class="help">
                                                    리워드 세부 사항(ex:티셔츠 사이즈, 색상 등)을 기입할때 적어주세요.
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <section class="payment">
                        <div class="section-header">
                            <h3 class="section-title">결제정보</h3>
                        </div>
                        <div class="payment-wrap">
                            <p class="notify"><i>*</i> 표시는 필수 입력하실 항목입니다.</p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th><i class="require">*</i>후원금액</th>
                                            <td>
                                                <select name="">
                                                    <option value="">50,000원(8명 후원)</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><i class="require">*</i>수량</th>
                                            <td>
                                                <select name="">
                                                    <option value="">1개</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="reward-item">
                                            <th>리워드내용</th>
                                            <td><strong>얼리버드 리워드</strong></td>
                                        </tr>
                                        <tr class="pay-type">
                                            <th><i class="require">*</i>결제선택</th>
                                            <td>
                                                <label><input type="radio" name="" value="">신용카드</label>
                                                <label><input type="radio" name="" value="">실시간계좌이체</label>
                                                <label><input type="radio" name="" value="">휴대폰결제</label>
                                                <label><input type="radio" name="" value="">무통장입금</label>
                                                <label><input type="radio" name="" value="">포인트결제</label>
                                            </td>
                                        </tr>
                                        <tr class="notice">
                                            <th>유의사항</th>
                                            <td>
                                                <ul>
                                                    <li><i class="dot"></i>"후원하기" 버튼을 클릭하면 지불정보를 안전하게 암호화하기 위한 플러그인이 설치됩니다.</li>
                                                    <li><i class="dot"></i>리워드 내용과 금액을 반드시 확인 하시기 바랍니다.</li>
                                                    <li><i class="dot"></i>플러그인을 설치하셨는데 결제창이 안뜰경우 브라우저를 닫고 다시 실행해 주세요.</li>
                                                    <li><i class="dot"></i>주문자 연락처와 이메일주소는 귀하의 결제정보를 알려드리기 위함이오니, 안심하시고 기입하셔도 됩니다.</li>
                                                    <li><i class="dot"></i>무통장 입금의 경우, 입금 확인 절차로 인하여 후원명단에 즉시 올라가지 않을 수 있음을 알려 드립니다.</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="agree">
                                            <th><i class="require">*</i>동의사항</th>
                                            <td>
                                                <div class="terms cancelation">
                                                    <strong>결제취소 및 환불규정 사항</strong>
                                                    <ol>
                                                        <li>1. 결제취소 : 프로젝트 완료후 리워드 제작 관계로 취소및 환불이 불가 합니다.</li>
                                                        <li>2. 환불규정 : 모든 프로젝트는 "소비자분쟁해결" 기준에 의거해 처리 됩니다. </li>
                                                    </ol>
                                                    <p>
                                                        <label>
                                                            <input type="checkbox" name="" value="">
                                                            위 결제 취소 및 환불 규정 사항을 모두 읽어보았으며 이에 동의합니다.
                                                        </label>
                                                    </p>
                                                </div>
                                                <div class="terms privacy">
                                                    <strong>개인정보 제 3자 제공동의</strong>
                                                    <ol>
                                                        <li>1. 리워드 제공의 목적으로 고객정보(이름/주소/연락처/리워드정보)를 프로젝트 등록자에게 제공하는것을 동의 합니다.</li>
                                                    </ol>
                                                    <p>
                                                        <label>
                                                            <input type="checkbox" name="" value="">
                                                            위 사항을 확인하고 동의합니다
                                                        </label>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <div class="summary">
                        <p>
                            총 후원금액 <strong>50,000<small>원</small></strong>
                        </p>
                    </div>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-primary btn-lg">후원하기</button>
                            <a class="btn btn-default btn-lg" href="#">후원취소</a>
                        </p>
                    </div>
                </form>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docjs.php'); ?>
    
</body>
</html>