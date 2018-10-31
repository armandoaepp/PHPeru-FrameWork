
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('trasladosService', function($http){
    this.getTrasladoss = function()
    {
        var url_    = 'data/ajax/traslados/indexTraslados.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setTraslados = function(params_)
    {
        var url_    = 'data/ajax/traslados/indexTraslados.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getTrasladosById = function(params_)
    {
        var url_    = 'data/ajax/traslados/indexTraslados.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updTraslados = function(params_)
    {
        var url_    = 'data/ajax/traslados/indexTraslados.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
