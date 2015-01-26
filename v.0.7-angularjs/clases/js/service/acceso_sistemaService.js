
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('acceso_sistemaService', function($http){
    this.getAcceso_sistemas = function()
    {
        var url_    = 'data/ajax/acceso_sistema/indexAcceso_sistema.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_, {'params': params_});
    };

    this.setAcceso_sistema = function(params_)
    {
        var url_    = 'data/ajax/acceso_sistema/indexAcceso_sistema.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getAcceso_sistemaById = function(params_)
    {
        var url_    = 'data/ajax/acceso_sistema/indexAcceso_sistema.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, {'params': params_});
    };

    this.updAcceso_sistema = function(params_)
    {
        var url_    = 'data/ajax/acceso_sistema/indexAcceso_sistema.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
