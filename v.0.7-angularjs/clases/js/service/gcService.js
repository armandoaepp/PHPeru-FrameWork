
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('gcService', function($http){
    this.getGcs = function()
    {
        var url_    = 'data/ajax/gc/indexGc.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setGc = function(params_)
    {
        var url_    = 'data/ajax/gc/indexGc.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getGcById = function(params_)
    {
        var url_    = 'data/ajax/gc/indexGc.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updGc = function(params_)
    {
        var url_    = 'data/ajax/gc/indexGc.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
