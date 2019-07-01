window.$ = jQuery;
const w = $(window);

export default function () {

    var btnAbrir = $(".header__btn_JS");

    var menu = $(".header__menu__JS");

    var open = false;

    btnAbrir.on("click", function() {

        // Si está abierto hay que cerrarlo.
        if(open == false) {
            menu.addClass('view');
            btnAbrir.addClass('close');
            open = true;
        } else {
            menu.removeClass('view');
            btnAbrir.removeClass('close');
            open = false;
        }
    })
}
