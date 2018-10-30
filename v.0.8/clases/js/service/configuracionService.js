
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('configuracionService', function($http){
    this.getConfiguracions = function()
    {
        var url_    = 'data/ajax/configuracion/indexConfiguracion.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setConfiguracion = function(params_)
    {
        var url_    = 'data/ajax/configuracion/indexConfiguracion.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getConfiguracionById = function(params_)
    {
        var url_    = 'data/ajax/configuracion/indexConfiguracion.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updConfiguracion = function(params_)
    {
        var url_    = 'data/ajax/configuracion/indexConfiguracion.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
