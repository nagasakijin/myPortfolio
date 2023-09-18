//下スクロール時、トップへ戻るを実装
$(function(){
    var pagetop = $('#page_top');
    // ボタン非表示
    pagetop.hide();
    // 100px スクロールしたらボタン表示
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
       }
    });
    pagetop.click(function () {
       $('body, html').animate({ scrollTop: 0 }, 500);
       return false;
    });
});
$(".open_btn").click(function () {//ボタンがクリックされたら
	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $("#g_nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});

$("#g_nav a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".open_btn").removeClass('active');//ボタンの activeクラスを除去し
    $("#g_nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});