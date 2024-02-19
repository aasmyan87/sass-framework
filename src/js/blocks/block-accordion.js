window.addEventListener('DOMContentLoaded', function() {
    jQuery(document).ready(function ($) {
        /**Accordion **/
        function md_acc(){
            let acc_item = $('.ac-nav_js');
            acc_item.on('click', function (e) {
                e.preventDefault();
                $(this).next().slideDown(200);
                $(this).parent().siblings().children().removeClass('active');
                $(this).parent().siblings().children().next().slideUp(200);
                if($(this).hasClass('active')){
                    $(this).removeClass('active');
                    $(this).next().slideUp(200);
                }else{
                    $(this).addClass('active');
                }
            });
        }
        md_acc();
    });
});


