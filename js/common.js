$(function () {
  //input 안에 삭제버튼 나타내기
  $('.textInput').on('input', function () {
    if ($(this).val() == '') {
      $(this).siblings('.inputTextDelete').css("display", "none");
    } else {
      $(this).siblings('.inputTextDelete').css("display", "block");
    }
  });

  //input 안에 삭제버튼 누르면 input텍스트 제거
  $('.inputTextDelete').click(function () {
    $(this).siblings('input').val('');
    $(this).css("display", "none");
  })

  // 체크박스 전체 선택
  $(".allAgreeBtn").on("click", "#check_btn", function () {
    var checked = $(this).is(":checked");

    if (checked) {
      $(this).parents(".allAgreeBtn").siblings('.checkBtnList').find('input').prop("checked", true);
      $('.certifiBtn').addClass('on')
    } else {
      $(this).parents(".allAgreeBtn").siblings('.checkBtnList').find('input').prop("checked", false);
      $('.certifiBtn').removeClass('on')
    }
  });

  $(".checkBtnList").on("click", ".normal", function () {
    var checked = $(this).is(":checked");

    if (!checked) {
      $(".allAgreeBtn>label>#check_btn").prop("checked", false);  
    }
  });

  // 체크박스 개별 선택
  $(".checkBtnList").on("click", ".normal", function () {
    var is_checked = true;
    var not_checked = false;

    $(".checkBtnList .normal").each(function () {
      is_checked = is_checked && $(this).is(":checked");
    });


    $(".allAgreeBtn>label>#check_btn").prop("checked", is_checked);
  });

  //필수선택
  $(".checkBtnList").on("click", ".essential", function(){
    var is_checked2 = true;
    $(".checkBtnList .essential").each(function () {
      is_checked2 = is_checked2 && $(this).is(":checked");
      if(!is_checked2){
        $('.certifiBtn').removeClass('on')
      }else{
        $('.certifiBtn').addClass('on')
      }
    });
  })


  //headerGnb 스크롤 이동시 상단 고정

  if($(".headerGnb").length !== 0) {
    var gnb = $(".headerGnb").offset().top;
    $(window).scroll(function () {
      var window = $(this).scrollTop();
  
      if (gnb <= window) {
        $(".headerGnb").addClass("fixed");
      } else {
        $(".headerGnb").removeClass("fixed");
      }
    });
  }


  //하단 gnb 스크롤에 따른 히든처리

  var prevScrollTop = $(window).scrollTop(),
    currentScrollTop = $(window).scrollTop();
    $(window).scroll(function (e) {
      currentScrollTop = $(this).scrollTop();
      if (currentScrollTop <= 0) {
        $('#bottomGnb').removeClass('hidden');
      } else if (currentScrollTop > prevScrollTop) {
        $('#bottomGnb').addClass('hidden');
      } else if (currentScrollTop < prevScrollTop) {
        $('#bottomGnb').removeClass('hidden');
      }
      prevScrollTop = currentScrollTop;
    });

  //스크롤탑버튼 기능
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $('.btn_gotop').show();
    } else {
      $('.btn_gotop').hide();
    }
  });
  $('.btn_gotop').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 400);
    return false;
  });

  //하트이미지 클릭변경
  $(".itemLike > button").click(function(){
    if($(this).hasClass('on')){
      $(this).removeClass('on')
      $('.likeComment').css("display","block")
      $('.likeComment').fadeOut(2000);
      $('.likeComment > p').text("찜하기 리스트에서 삭제되었습니다.")
      
    }else{
      $(this).addClass('on')
      $('.likeComment').css("display","block")
      $('.likeComment').fadeOut(2000);
      $('.likeComment > p').text("찜하기 리스트에 추가되었습니다.")
    }
  })


  //footer arrow 버튼
  $('.info_d_arrow').click(function(){
    $('.info_content').toggleClass('on')
    if($('.info_content').hasClass('on')){
        $('.info_d_arrow').children('img').attr("src","./img/ic-arrow-up-24.png") 
    }else{
        $('.info_d_arrow').children('img').attr("src","./img/ic-arrow-down-24.png") 
    }
  })

});

