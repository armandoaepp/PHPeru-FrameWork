
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('configService', function($http){
    this.getConfigs = function()
    {
        var url_    = 'data/ajax/config/indexConfig.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setConfig = function(params_)
    {
        var url_    = 'data/ajax/config/indexConfig.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getConfigById = function(params_)
    {
        var url_    = 'data/ajax/config/indexConfig.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updConfig = function(params_)
    {
        var url_    = 'data/ajax/config/indexConfig.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
