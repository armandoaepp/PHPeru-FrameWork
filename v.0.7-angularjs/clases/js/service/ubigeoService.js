
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('ubigeoService', function($http){
    this.getUbigeos = function()
    {
        var url_    = 'data/ajax/ubigeo/indexUbigeo.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setUbigeo = function(params_)
    {
        var url_    = 'data/ajax/ubigeo/indexUbigeo.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getUbigeoById = function(params_)
    {
        var url_    = 'data/ajax/ubigeo/indexUbigeo.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updUbigeo = function(params_)
    {
        var url_    = 'data/ajax/ubigeo/indexUbigeo.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
