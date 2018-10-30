
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('homeService', function($http){
    this.getHomes = function()
    {
        var url_    = 'data/ajax/home/indexHome.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setHome = function(params_)
    {
        var url_    = 'data/ajax/home/indexHome.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getHomeById = function(params_)
    {
        var url_    = 'data/ajax/home/indexHome.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updHome = function(params_)
    {
        var url_    = 'data/ajax/home/indexHome.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
