
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('usuarioService', function($http){
    this.getUsuarios = function()
    {
        var url_    = 'data/ajax/usuario/indexUsuario.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setUsuario = function(params_)
    {
        var url_    = 'data/ajax/usuario/indexUsuario.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getUsuarioById = function(params_)
    {
        var url_    = 'data/ajax/usuario/indexUsuario.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updUsuario = function(params_)
    {
        var url_    = 'data/ajax/usuario/indexUsuario.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
