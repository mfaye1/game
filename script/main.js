/**
 * Created by Mamadou Faye on 17/01/2017.
 */
"use strict";

function setCookie(key, value) {
    var expires = new Date();
    expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
    document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
}

function getCookie(key) {
    var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
    return keyValue ? keyValue[2] : null;
}

$(function () {
    var panier = $(".panier");
    $('.panier_control').on('click', function () {
        if (panier.dialog("isOpen")) {
            panier.dialog("close");
        } else {
            panier.dialog("open");
        }
    });
    var cart_opened_cookie = getCookie('cart_opened');
    // console.log(cart_opened_cookie);
    var cart_opened = ('true' === cart_opened_cookie);
    // console.log(cart_opened);
    panier.dialog({
        modal: false,
        autoOpen: cart_opened,
        position: {my: "center top", at: "center top", of: window},
        title: "Panier",
        close: function() {
            setCookie('cart_opened', 'false');
        },
        open: function() {
            setCookie('cart_opened', 'true');
        },
        /*
         buttons: {
         Ok: function () {
         $(this).dialog("close");
         }
         }
         */
    });

    /*
     $('form.panier_action').submit(function () {
     $(this).find('input[name="cart_opened"]').attr('value', panier.dialog("isOpen")?'true':'false');
     });
     */
});