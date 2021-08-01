<script src="../js/jquery-2.1.4.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.offcanvas.js"></script>
<script src="../js/download/jquery.bootstrap-autohidingnavbar.js"></script>
<script src="../js/material.js"></script>
<script src="../js/ripples.js"></script>
<script src="../js/download/nprogress.js"></script>
<script src="../js/download/bootstrap-progressbar.js"></script>
<!--<script>
    $(document).ready(function () {

//        $("div.navbar-static").autoHidingNavbar();

        $('#nav').affix({
            offset: {
                top: $('#header-top').height()
            }
        });
        $('#sidebar').affix({
            offset: {
                top: 1000
            }
        });
        /*---------- Material js ----------*/
        $.material.init();
        $('input,textarea').focus(function () {
            $(this).data('placeholder', $(this).attr('placeholder'))
                    .attr('placeholder', '');
        }).blur(function () {
            $(this).attr('placeholder', $(this).data('placeholder'));
        });
    });
    if (typeof NProgress != 'undefined') {
        $(document).ready(function () {
            NProgress.start();
        });
        $(window).load(function () {
            NProgress.done();
        });
    }
</script>
<script>
    $(".navbar-edit a").on("click", function () {
        $(".navbar-edit").find(".active").removeClass("active");
        $(this).parent().addClass("active");
    });</script>-->
<!--<script>
            const $dropdown = $(".dropdown");
            const $dropdownToggle = $(".dropdown-toggle");
            const $dropdownMenu = $(".dropdown-menu");
            const showClass = "show";
            $(window).on("load resize", function() {
    if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
            function() {
            const $this = $(this);
                    $this.addClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "true");
                    $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
            const $this = $(this);
                    $this.removeClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "false");
                    $this.find($dropdownMenu).removeClass(showClass);
            }
    );
    } else {
    $dropdown.off("mouseenter mouseleave");
    }
    });
</script>-->

<script>
    $(document).ready(function () {

        $("div.navbar-static").autoHidingNavbar();
        $('#nav').affix({
            offset: {
                top: $('#header-top').height()
            }
        });
        $('#sidebar').affix({
            offset: {
                top: 1000
            }
        });
//        $('.a-login').on("click", function () {
//            $('.login-popup').fadeToggle(300);
//        });

//        $(".body-offcanvas").mouseup(function (e)
//        {
//            var subject = $(".login-popup");
//
//            if (e.target.id != subject.attr('class') && !subject.has(e.target).length)
//            {
//                subject.fadeOut();
//            }
//        });
//        
//        $('.a-search').on("click", function () {
//            $('.search-popup').fadeToggle(300);
//        });
//
//        $(".body-offcanvas").mouseup(function (e)
//        {
//            var subject = $(".search-popup");
//
//            if (e.target.id != subject.attr('class') && !subject.has(e.target).length)
//            {
//                subject.fadeOut();
//            }
//        });


        /*---------- Material js ----------*/
        $.material.init();
//        $('input,textarea').focus(function () {
//            $(this).data('placeholder', $(this).attr('placeholder'))
//                    .attr('placeholder', '');
//        }).blur(function () {
//            $(this).attr('placeholder', $(this).data('placeholder'));
//        });


        $(".navbar-edit a").on("click", function () {
            $(".navbar-edit").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });
//        $('.btn-filter').on("click", function () {
//            $('.share-popup').fadeToggle(300);
//        });
//
//        var $unique = $('input.unique');
//        $unique.click(function () {
//            $unique.filter(':checked').not(this).removeAttr('checked');
//        });
//
//
//
//        $('.checkbox1').change(function () {
//            if (this.checked)
//                $('.show-checkbox1').fadeIn(300);
//            else
//                $('.show-checkbox1').hide();
//
//        });
//
//        $('.checkbox1').change(function () {
//            if (this.checked)
//                $('.show-checkbox2').hide();
//            else
//                $('.show-checkbox1').hide();
//
//        });
//
//        $('.checkbox2').change(function () {
//            if (this.checked)
//                $('.show-checkbox2').fadeIn(300);
//            else
//                $('.show-checkbox2').hide();
//
//        });
//
//        $('.checkbox2').change(function () {
//            if (this.checked)
//                $('.show-checkbox1').hide();
//            else
//                $('.show-checkbox2').hide();
//
//        });
//
//    });

        if (typeof NProgress != 'undefined') {
            $(document).ready(function () {
                NProgress.start();
            });
            $(window).load(function () {
                NProgress.done();
            });
        }
    }

</script>
<script>
    $(document).ready(function () {


    $(document).on('click', '.yamm .dropdown-menu', function (e) {
        e.stopPropagation()
    });
    $(".navbar-edit a").on("click", function () {
        $(".navbar-edit").find(".active").removeClass("active");
        $(this).parent().addClass("active");
    });
    });
</script>
