
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('tallerService', function($http){
    this.getTallers = function()
    {
        var url_    = 'data/ajax/taller/indexTaller.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setTaller = function(params_)
    {
        var url_    = 'data/ajax/taller/indexTaller.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getTallerById = function(params_)
    {
        var url_    = 'data/ajax/taller/indexTaller.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updTaller = function(params_)
    {
        var url_    = 'data/ajax/taller/indexTaller.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
