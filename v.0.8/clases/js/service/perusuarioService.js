
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('perusuarioService', function($http){
    this.getPerusuarios = function()
    {
        var url_    = 'data/ajax/perusuario/indexPerusuario.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setPerusuario = function(params_)
    {
        var url_    = 'data/ajax/perusuario/indexPerusuario.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getPerusuarioById = function(params_)
    {
        var url_    = 'data/ajax/perusuario/indexPerusuario.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updPerusuario = function(params_)
    {
        var url_    = 'data/ajax/perusuario/indexPerusuario.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
