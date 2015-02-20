
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('logService', function($http){
    this.getLogs = function()
    {
        var url_    = 'data/ajax/log/indexLog.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setLog = function(params_)
    {
        var url_    = 'data/ajax/log/indexLog.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getLogById = function(params_)
    {
        var url_    = 'data/ajax/log/indexLog.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updLog = function(params_)
    {
        var url_    = 'data/ajax/log/indexLog.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
