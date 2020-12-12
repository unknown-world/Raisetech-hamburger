$(function() {
    var $sidebarOpen = $(".p-sidebar__button--open");
    var $sidebarClose = $(".p-sidebar__button--close");
    var $sidebar = $(".l-sidebar");
    var $sidebarOpponent = $(".l-sidebar__opponent");
    var $sidebarWrapper = $(".l-sidebar__wrapper");
    var $sidebarTime = 500;

    $sidebarOpen.on('click', function() {//クリックした時、sidebarを表示、背景色を暗くする

        $sidebar.animate({'marginRight':"367"}, $sidebarTime);
        $(this).addClass("is_active");
        $sidebarClose.removeClass("is_active");
        $sidebarOpponent.addClass("is_active");
        $sidebarWrapper.addClass("is_active");
        $sidebar.show();
    });

    $sidebarClose.on('click', function() {//クリックした時、sidebarを非表示、背景色を戻す
        
        $sidebar.animate({'marginRight':"0"}, $sidebarTime);
        $(this).addClass("is_active");
        $sidebarOpen.removeClass("is_active");
        $sidebarOpponent.removeClass("is_active");
        $sidebarWrapper.removeClass("is_active");
        $sidebar.hide($sidebarTime);
    });

    $(window).on('resize', function() {//画面横幅がPCサイズに変更したときsidebarをPC版の設定に戻す
            if(window.innerWidth > 959){//PC版の時
            $sidebarOpen.addClass("is_active");
            $sidebarClose.removeClass("is_active");
            $sidebarOpponent.removeClass("is_active");
            $sidebarWrapper.removeClass("is_active");
            $sidebar.animate({'marginRight':"0"}, 0);
        }
    });
})