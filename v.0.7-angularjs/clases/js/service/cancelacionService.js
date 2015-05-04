
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('cancelacionService', function($http){
    this.getCancelacions = function()
    {
        var url_    = 'data/ajax/cancelacion/indexCancelacion.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setCancelacion = function(params_)
    {
        var url_    = 'data/ajax/cancelacion/indexCancelacion.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getCancelacionById = function(params_)
    {
        var url_    = 'data/ajax/cancelacion/indexCancelacion.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updCancelacion = function(params_)
    {
        var url_    = 'data/ajax/cancelacion/indexCancelacion.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
