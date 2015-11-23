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
        <main id="content" class="register step2 board">
            <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/path.php'); ?>
            <div class="container">
                <div class="page-header">
                    <h2 class="page-title">프로젝트 등록하기</h2>
                    <p>카테고리 다중선택이가능하며, 프로젝트 등록후 관리자의 승인후 사이트에 정상적으로 등록되게 됩니다.</p>
                </div>
                <div class="notify">
                    <p><i class="require">*</i> 아이콘 표시는 필수 입력 항목사항입니다.</p>
                    <p>정보를 등록하신 후 마이페이지에서 유료결제 진행을 하실 수 있습니다.</p>
                    <p>카테고리는 최대 4단계까지 등록/설정이 가능합니다.</p>
                </div>
                <form action="" method="post">
                    <section class="category">
                        <div class="section-header">
                            <h3 class="section-title">카테고리 선택</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th><i class="require">*</i>카테고리1</th>
                                        <td>
                                            <select name="">
                                                <option value="">선택</option>
                                            </select>
                                            <select name="">
                                                <option value="">선택</option>
                                            </select>
                                            <select name="">
                                                <option value="">선택</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>카테고리2</th>
                                        <td>
                                            <select name="">
                                                <option value="">선택</option>
                                            </select>
                                            <select name="">
                                                <option value="">선택</option>
                                            </select>
                                            <select name="">
                                                <option value="">선택</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>카테고리3</th>
                                        <td>
                                            <select name="">
                                                <option value="">선택</option>
                                            </select>
                                            <select name="">
                                                <option value="">선택</option>
                                            </select>
                                            <select name="">
                                                <option value="">선택</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <section class="default">
                        <div class="section-header">
                            <h3 class="section-title">기본정보 입력</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th><i class="require">*</i><label for="project-title">프로젝트 제목</label></th>
                                        <td>
                                            <input id="project-title" type="text" name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><i class="require">*</i><label for="project-desc">프로젝트 설명</label></th>
                                        <td>
                                            <input id="project-desc" type="text" name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="staff-name">담당자</label></th>
                                        <td>
                                            <input id="staff-name" type="text" name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="staff-email">이메일</label></th>
                                        <td>
                                            <input id="staff-email" type="email" name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="homepage">홈페이지</label></th>
                                        <td>
                                            <input id="homepage" type="text" name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><i class="require">*</i>주소</th>
                                        <td>
                                            <select name="">
                                                <option value="">지역선택</option>
                                            </select>
                                            <select name="">
                                                <option value="">구선택</option>
                                            </select>
                                            <select name="">
                                                <option value="">동선택</option>
                                            </select>
                                            <label class="sr-only" for="addr-details">상세주소</label>
                                            <input id="addr-details" type="text" name="">
                                            <button type="button" class="btn btn-default btn-sm">위치변경</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <section class="sponsor">
                        <div class="section-header">
                            <h3 class="section-title">프로젝트 후원기간 및 금액</h3>
                            <p>영상URL은 미입력시 업로드된 사진이미지가 출력됩니다.</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th><i class="require">*</i>개인사진</th>
                                        <td>
                                            <input type="file" name="">
                                            <p class="help">jpg,jpeg,gif 확장자만 등록가능합니다.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>자기소개</th>
                                        <td>
                                            <textarea name="" cols="50" rows="2"></textarea>
                                            <p class="help">상세페이지에서 프로젝트 등록자 소개부분에 보여집니다.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>영상URL</th>
                                        <td>
                                            <textarea name="" cols="50" rows="2"></textarea>
                                            <p class="help">영상사이즈는 가로640x세로390 (pixel) 로 업로드하시길 권장하여 드립니다.</p>
                                            <p class="help ex">ex) 유투브 이용시 &lt;iframe width=&quot;100%&quot; height=&quot;360&quot; src=&quot;영상주소&quot; frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;</p>
                                        </td>
                                    </tr>
                                    <tr class="period">
                                        <th><i class="require">*</i>후원기간</th>
                                        <td>
                                            <label><input class="datepicker" type="text" name=""></label>
                                            <span role="presentation">~</span>
                                            <label><input class="datepicker" type="text" name=""></label>
                                            <p class="help inline">프로젝트 진행기간 <strong>0</strong> 일</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><i class="require">*</i>목표금액</th>
                                        <td>
                                            <button type="button" class="btn btn-default btn-sm">10만</button>
                                            <button type="button" class="btn btn-default btn-sm">100만</button>
                                            <button type="button" class="btn btn-default btn-sm">500만</button>
                                            <label><input type="text" name=""> 원</label>
                                        </td>
                                    </tr>
                                    <tr class="goal-personnel">
                                        <th><i class="require">*</i>목표인원</th>
                                        <td>
                                            <label><input type="text" name=""> 명</label>
                                            <label><input type="radio" name="" value=""> 중복참여방지</label>
                                            <label><input type="radio" name="" value=""> 중복참여방지안함</label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <section class="details">
                        <div class="section-header">
                            <h3 class="section-title">프로젝트 상세정보</h3>
                            <p>프로젝트 상세정보는 “타이틀, 소개, 리워드 내용” 으로 구성된 이미지(가로 640px)로 업로드 하시길 권장하여 드립니다.</p>
                        </div>
                        <div class="project-editor">
                            에디터 영역
                        </div>
                    </section>
                    <section class="reward">
                        <div class="section-header">
                            <h3 class="section-title">리워드 입력</h3>
                            <p>수량제한을 사용하지 않거나 0 으로 입력하면 무제한으로 표기됩니다</p>
                            <p class="btn-add-reward"><button type="button" class="btn btn-default btn-sm">리워드 추가하기</button></p>
                        </div>
                        <div class="reward-item">
                            <h4>리워드 #1</h4>
                            <p class="remove-reward"><label><input type="checkbox" name="" value=""> 리워드 삭제</label></p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr class="price">
                                            <th>후원금액</th>
                                            <td><label><input type="text" name="" value=""> 원</label></td>
                                        </tr>
                                        <tr class="schedule">
                                            <th>리워드일정</th>
                                            <td><label><input type="text" name="" value=""></label></td>
                                        </tr>
                                        <tr class="content">
                                            <th>리워드내용</th>
                                            <td>
                                                <textarea cols="50" rows="2" name=""></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>수량제한</th>
                                            <td>
                                                <label><input type="checkbox" name="" value=""></label>
                                                <label><input type="text" name=""> 개</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>인원제한</th>
                                            <td>
                                                <label><input type="checkbox" name="" value=""></label>
                                                <label><input type="text" name=""> 명</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>1인 최대후원 개수</th>
                                            <td>
                                                <label><input type="checkbox" name="" value=""></label>
                                                <label><input type="text" name=""> 개</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="reward-item">
                            <h4>리워드 #2</h4>
                            <p class="remove-reward"><label><input type="checkbox" name="" value=""> 리워드 삭제</label></p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr class="price">
                                            <th>후원금액</th>
                                            <td><label><input type="text" name="" value=""> 원</label></td>
                                        </tr>
                                        <tr class="schedule">
                                            <th>리워드일정</th>
                                            <td><label><input type="text" name="" value=""></label></td>
                                        </tr>
                                        <tr class="content">
                                            <th>리워드내용</th>
                                            <td>
                                                <textarea cols="50" rows="2" name=""></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>수량제한</th>
                                            <td>
                                                <label><input type="checkbox" name="" value=""></label>
                                                <label><input type="text" name=""> 개</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>인원제한</th>
                                            <td>
                                                <label><input type="checkbox" name="" value=""></label>
                                                <label><input type="text" name=""> 명</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>1인 최대후원 개수</th>
                                            <td>
                                                <label><input type="checkbox" name="" value=""></label>
                                                <label><input type="text" name=""> 개</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <section class="upload">
                        <div class="section-header">
                            <h3 class="section-title">이미지 등록</h3>
                            <ul>
                                <li>- [파일선택]버튼을 클릭하여 사용할 이미지를 선택한 다음 업로드 버튼을 클릭하여 이미지를 업로드 시킵니다.</li>
                                <li>- 이미지 업로드가 완료되면 플래시 화면으로 업로드 된 이미지들이 표시됩니다.</li>
                                <li>- 업로드 된 이미지를 마우스로 드래그 하여 재배치 할 수 있습니다.</li>
                                <li>- 개당 5MB이하 / 총 50MB이하의 이미지를 한번에 업로드가 가능합니다.</li>
                            </ul>
                        </div>
                        <div class="file-uploader">
                            파일 업로더
                        </div>
                    </section>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-primary btn-lg">프로젝트 등록하기</button>
                            <a href="#" class="btn btn-default btn-lg">등록 취소하기</a>
                        </p>
                    </div>
                </form>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docjs.php'); ?>
    <script>
        (function() {
            
            // 달력 출력
            $(document).on('focus', '.datepicker', function() {
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
            
            // 리워드 추가하기
            $(document).on('click', '.reward .btn-add-reward', function() {
                var $newRewardItem = $('.reward .reward-item:eq(0)').clone();
                $newRewardItem.find('h4').text('리워드 #'+($('.reward .reward-item').length+1));
                $newRewardItem.find('input[type="text"]').val('');
                $newRewardItem.find('textarea').val('');
                $newRewardItem.find('input[type="checkbox"]').removeAttr('checked');
                $newRewardItem.appendTo('.reward');
            });
            
        })(jQuery);
    </script>
    
</body>
</html>