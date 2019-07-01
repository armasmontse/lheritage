window.$ = jQuery;
const w = $(window);

export default function () {

    var btnAbrir = $("#reservaciones_JS");

    var btnCerrar = $("#reservaciones-close_JS");

    var menu = $(".home__modal_JS");

    var open = false;

    btnAbrir.on("click", function () {

        console.log('SE ABRE MODAL');
    
        menu.addClass('view');
        // menu.removeClass('view');
    });

    btnCerrar.on("click", function () {

        console.log('SE CIERRA MODAL');

        menu.removeClass('view');
        // menu.removeClass('view');
    })
}
