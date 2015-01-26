
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('cellocatorService', function($http){
    this.getCellocators = function()
    {
        var url_    = 'data/ajax/cellocator/indexCellocator.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_, {'params': params_});
    };

    this.setCellocator = function(params_)
    {
        var url_    = 'data/ajax/cellocator/indexCellocator.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getCellocatorById = function(params_)
    {
        var url_    = 'data/ajax/cellocator/indexCellocator.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, {'params': params_});
    };

    this.updCellocator = function(params_)
    {
        var url_    = 'data/ajax/cellocator/indexCellocator.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
