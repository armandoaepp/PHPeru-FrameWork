
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('rolService', function($http){
    this.getRols = function()
    {
        var url_    = 'data/ajax/rol/indexRol.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_, {'params': params_});
    };

    this.setRol = function(params_)
    {
        var url_    = 'data/ajax/rol/indexRol.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getRolById = function(params_)
    {
        var url_    = 'data/ajax/rol/indexRol.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, {'params': params_});
    };

    this.updRol = function(params_)
    {
        var url_    = 'data/ajax/rol/indexRol.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
