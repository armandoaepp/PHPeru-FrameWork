
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('operadorService', function($http){
    this.getOperadors = function()
    {
        var url_    = 'data/ajax/operador/indexOperador.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setOperador = function(params_)
    {
        var url_    = 'data/ajax/operador/indexOperador.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getOperadorById = function(params_)
    {
        var url_    = 'data/ajax/operador/indexOperador.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updOperador = function(params_)
    {
        var url_    = 'data/ajax/operador/indexOperador.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
