/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



jQuery(document).ready(function ($) {
    function classes_by_window_size() {
        var screen_width = $(window).width();

        if (screen_width < 591) {
            $('body').addClass('cellphone-widget');
        }
        if (screen_width < 773) {
            $('body').addClass('device-widget');
        }else{
            $('body').removeClass('device-widget');
                $('body').removeClass('cellphone-widget');
        }
    }
    classes_by_window_size();
    $(window).on('resize', function () {
        classes_by_window_size();
    });
});
