
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('buzonService', function($http){
    this.getBuzons = function()
    {
        var url_    = 'data/ajax/buzon/indexBuzon.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setBuzon = function(params_)
    {
        var url_    = 'data/ajax/buzon/indexBuzon.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getBuzonById = function(params_)
    {
        var url_    = 'data/ajax/buzon/indexBuzon.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updBuzon = function(params_)
    {
        var url_    = 'data/ajax/buzon/indexBuzon.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
