
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('redService', function($http){
    this.getReds = function()
    {
        var url_    = 'data/ajax/red/indexRed.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setRed = function(params_)
    {
        var url_    = 'data/ajax/red/indexRed.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getRedById = function(params_)
    {
        var url_    = 'data/ajax/red/indexRed.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updRed = function(params_)
    {
        var url_    = 'data/ajax/red/indexRed.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
