<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
    <title>WAWA VENTURES</title> 
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/board.css" rel="stylesheet">
    <link href="/css/mypage.css" rel="stylesheet">
</head>
<body class="mypage">
    <a href="#content" class="skip sr-only sr-only-focusable">컨텐츠로 건너뛰기</a>
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
        <main id="content" class="modify-info board">
            <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/path.php'); ?>
            <div class="container">
                <div class="page-header">
                    <h2 class="page-title">회원정보수정</h2>
                    <p>회원님의 회원정보수정페이지입니다</p>
                </div>
                <div class="write">
                    <form action="#" method="post">
                        <div class="default">
                            <p class="notify"><i>*</i> 표시는 필수 입력하실 항목입니다.</p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr class="email">
                                            <th>이메일</th>
                                            <td>
                                                mk_manager@mkdesign.co.kr
                                                <p class="help">
                                                    <label><input type="checkbox" name=""> 이벤트/정보를 이메일로 받아보시겠습니까? (주요정책 메시지는 수신동의여부와 관계없이 발송됩니다)</label>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><i class="require">*</i><label for="password">비밀번호</label></th>
                                            <td><input id="password" type="password" name=""></td>
                                        </tr>
                                        <tr>
                                            <th><i class="require">*</i><label for="re-password">비밀번호 확인</label></th>
                                            <td><input id="re-password" type="password" name=""></td>
                                        </tr>
                                        <tr>
                                            <th><label for="name">이름</label></th>
                                            <td><input id="name" type="text" name=""></td>
                                        </tr>
                                        <tr>
                                            <th><label for="nickname">닉네임</label></th>
                                            <td><input id="nickname" type="text" name=""></td>
                                        </tr>
                                        <tr class="mobile">
                                            <th><label for="mobile">휴대폰</label></th>
                                            <td>
                                                <input id="mobile" type="text" name="">
                                                <p class="help">
                                                    <label><input type="checkbox" name=""> 이벤트/정보를 SNS로 받아보시겠습니까? (주요정책 메시지는 수신동의여부와 관계없이 발송됩니다)</label>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="phone">전화번호</label></th>
                                            <td><input id="phone" type="text" name=""></td>
                                        </tr>
                                        <tr>
                                            <th><label for="zipcode">우편번호</label></th>
                                            <td>
                                                <input id="zipcode" type="text" name="" readonly="readonly">
                                                <button type="button" class="btn btn-default">우편번호</button>
                                                <p class="help inline">
                                                    <label><input type="checkbox" name=""> 우편 수신동의</label>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="address">
                                            <th><label for="address-1">도로명주소/지번주소</label></th>
                                            <td><input id="address-1" type="text" name=""></td>
                                        </tr>
                                        <tr class="address">
                                            <th><label for="address-2">상세주소</label></th>
                                            <td><input id="address-2" type="text" name=""></td>
                                        </tr>
                                        <tr class="profile">
                                            <th><label for="profile">프로필</label></th>
                                            <td>
                                                <figure class="empty"><!-- empty 클래스는 프로필이 없을 경우만 -->
                                                    <img src="/images/img_empty.gif">
                                                </figure>
                                                <p>
                                                    <input type="file">
                                                </p>
                                                <p class="help">
                                                    <label><input type="checkbox" name=""> 파일삭제</label>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="introduce">
                                            <th>자기소개</th>
                                            <td>
                                                <textarea cols="100" rows="10" name="" placeholder="자기소개를 입력해 주세요"></textarea>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="bank-account">
                            <p class="notify">아래 계좌정보는 후원환불이나 갱신 시 필요합니다.</p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th><label for="bank">은행명</label></th>
                                            <td><input id="bank" type="text" name=""></td>
                                        </tr>
                                        <tr>
                                            <th><label for="account-number">계좌번호</label></th>
                                            <td><input id="account-number" type="text" name=""></td>
                                        </tr>
                                        <tr>
                                            <th><label for="account-owner">예금주</label></th>
                                            <td><input id="account-owner" type="text" name=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-primary">회원정보수정</button>
                                <a href="#" class="btn btn-default">취소</a>
                                <a href="#" class="btn btn-default">회원탈퇴</a>
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