
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('facultadService', function($http){
    this.getFacultads = function()
    {
        var url_    = 'data/ajax/facultad/indexFacultad.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setFacultad = function(params_)
    {
        var url_    = 'data/ajax/facultad/indexFacultad.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getFacultadById = function(params_)
    {
        var url_    = 'data/ajax/facultad/indexFacultad.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updFacultad = function(params_)
    {
        var url_    = 'data/ajax/facultad/indexFacultad.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
