var Define = {
    CONTROLLER_BASE: 'prueba',
    ACTION_BASE: 'index',
    URL_LANDING: 'landing/index.php.html',
    LATITUD:'',
    LONGITUD:'',
    URL_FOTO_PERFIL: 'utils/archivos/perfiles/'
    
};

function crearUrlAjax(controlador, action ) {

    action = (action) ? action : Define.ACTION_BASE;
    controlador = (controlador) ? controlador : Define.CONTROLLER_BASE;
    
    var url_ajax = "index.php?controller=" + controlador + "&action="  + action;
    return url_ajax;
}

function crearUrlAjaxLanding(controlador, action ) {

    action = (action) ? action : Define.ACTION_BASE;
    controlador = (controlador) ? controlador : Define.CONTROLLER_BASE;
    
    var url_ajax = "../index.php?controller=" + controlador + "&action="  + action;
    return url_ajax;
}


