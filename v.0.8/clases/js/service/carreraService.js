
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('carreraService', function($http){
    this.getCarreras = function()
    {
        var url_    = 'data/ajax/carrera/indexCarrera.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setCarrera = function(params_)
    {
        var url_    = 'data/ajax/carrera/indexCarrera.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getCarreraById = function(params_)
    {
        var url_    = 'data/ajax/carrera/indexCarrera.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updCarrera = function(params_)
    {
        var url_    = 'data/ajax/carrera/indexCarrera.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
