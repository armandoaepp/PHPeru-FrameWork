
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('diplomadoService', function($http){
    this.getDiplomados = function()
    {
        var url_    = 'data/ajax/diplomado/indexDiplomado.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setDiplomado = function(params_)
    {
        var url_    = 'data/ajax/diplomado/indexDiplomado.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getDiplomadoById = function(params_)
    {
        var url_    = 'data/ajax/diplomado/indexDiplomado.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updDiplomado = function(params_)
    {
        var url_    = 'data/ajax/diplomado/indexDiplomado.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
