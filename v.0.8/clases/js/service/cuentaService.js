
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('cuentaService', function($http){
    this.getCuentas = function()
    {
        var url_    = 'data/ajax/cuenta/indexCuenta.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setCuenta = function(params_)
    {
        var url_    = 'data/ajax/cuenta/indexCuenta.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getCuentaById = function(params_)
    {
        var url_    = 'data/ajax/cuenta/indexCuenta.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updCuenta = function(params_)
    {
        var url_    = 'data/ajax/cuenta/indexCuenta.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
