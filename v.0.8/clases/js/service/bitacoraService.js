
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('bitacoraService', function($http){
    this.getBitacoras = function()
    {
        var url_    = 'data/ajax/bitacora/indexBitacora.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setBitacora = function(params_)
    {
        var url_    = 'data/ajax/bitacora/indexBitacora.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getBitacoraById = function(params_)
    {
        var url_    = 'data/ajax/bitacora/indexBitacora.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updBitacora = function(params_)
    {
        var url_    = 'data/ajax/bitacora/indexBitacora.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
