
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('operacionService', function($http){
    this.getOperacions = function()
    {
        var url_    = 'data/ajax/operacion/indexOperacion.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setOperacion = function(params_)
    {
        var url_    = 'data/ajax/operacion/indexOperacion.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getOperacionById = function(params_)
    {
        var url_    = 'data/ajax/operacion/indexOperacion.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updOperacion = function(params_)
    {
        var url_    = 'data/ajax/operacion/indexOperacion.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
