$(document).ready(function () {
    // loadTheme();
    $(document.body).append('<div class=page-overlay></div>');

    
    toggleFullScreen();
    toggleSidebarView();
    selectMenu();
    // toggleSearch();
    // forms();

    // $('.choose-theme a').click(function () {
    //     var theme = $(themeis).attr('data-theme');
    //     setTheme(theme);
    //     location.reload();
    // });

});

$(window).load(function () {
    $('#loader-overlay').fadeOut();
});

// function loadTheme() {
//     var theme = false;

//     if (localStorage.getItem('theme')) {
//         theme = localStorage.getItem('theme');
//         setTheme(theme);
//         $(document.head).append('<link rel="stylesheet" type="text/css" href="assets/css/themes/' + theme + '/' + theme + '.css"></div>');
//     }

//     return theme;
// }

// function setTheme(theme) {
//     localStorage.setItem('theme', theme);
//     $('.choose-theme a[data-theme=' + theme + ']').addClass('active');
// }

function selectMenu() {
    $('.sidebar-links li a').click(function() {
        $('.sidebar-links').find('.active').removeClass('active');
        $(this).addClass('active');
    });
}

function toggleSidebarView() {

    $('.toggle-sidebar input').change(function (e) {
        if ($(this).is(':checked')) {
            $('body').removeClass('hidden-sidebar');
            $('.c-2').addClass('col-md-2');
            $('.page').removeClass('col-md-12').addClass('col-md-10');
        }
        else {
            $('body').addClass('hidden-sidebar');
            $('.c-2').removeClass('col-md-2');
            $('.page').removeClass('col-md-10').addClass('col-md-12');
        }
    });

    $('[data-open-sidebar]').click(function () {
        $('.page-overlay').toggle();
        $('aside.sidebar').toggleClass('sidebar-open');
    });
    $('.page-overlay').click(function () {
        $('aside.sidebar').removeClass('sidebar-open');
        $('.page-overlay').fadeOut();
    });

    $('.sidebar .toggle').click(function(){
        $(this).parent().find('ul').toggle(300);
    });

}

// function forms() {
//     $('.search-field').focus(function () {
//         $('.header-search').addClass('active');
//     });

//     $('.search-field').blur(function () {
//         $('.header-search').removeClass('active');
//     });
// }

// function toggleSearch() {
//     $('.toggle-search a').click(function () {
//         $('.header-search input').focus();
//         $('.page-overlay').fadeIn();
//         $('.header-search').css('top', 0);
//     });

//     $('.page-overlay').click(function () {
//         $('.header-search').css('top', '-115px');
//         $(this).fadeOut();
//     });
// }

function toggleFullScreen() {
    /*
   * Fullscreen Browsing
   */
   if ($('[data-action="fullscreen"]')[0]) {
    var fs = $("[data-action='fullscreen']");
    fs.on('click', function (e) {
        e.preventDefault();

            //Launch
            function launchIntoFullscreen(element) {

                if (element.requestFullscreen) {
                    element.requestFullscreen();
                } else if (element.mozRequestFullScreen) {
                    element.mozRequestFullScreen();
                } else if (element.webkitRequestFullscreen) {
                    element.webkitRequestFullscreen();
                } else if (element.msRequestFullscreen) {
                    element.msRequestFullscreen();
                }
            }

            //Exit
            function exitFullscreen() {

                if (document.exitFullscreen) {
                    document.exitFullscreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitExitFullscreen) {
                    document.webkitExitFullscreen();
                }
            }

            launchIntoFullscreen(document.documentElement);
            fs.closest('.dropdown').removeClass('open');
        });
}


}