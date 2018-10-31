
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('amigosService', function($http){
    this.getAmigoss = function()
    {
        var url_    = 'data/ajax/amigos/indexAmigos.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setAmigos = function(params_)
    {
        var url_    = 'data/ajax/amigos/indexAmigos.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getAmigosById = function(params_)
    {
        var url_    = 'data/ajax/amigos/indexAmigos.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updAmigos = function(params_)
    {
        var url_    = 'data/ajax/amigos/indexAmigos.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
