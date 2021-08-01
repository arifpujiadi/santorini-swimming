/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    init_InputMask();

    function init_InputMask() {

        if (typeof ($.fn.inputmask) === 'undefined') {
            return;
        }
        console.log('init_InputMask');

        $(":input").inputmask();

    }
    ;


});