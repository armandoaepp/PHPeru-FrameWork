
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('transmisionService', function($http){
    this.getTransmisions = function()
    {
        var url_    = 'data/ajax/transmision/indexTransmision.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setTransmision = function(params_)
    {
        var url_    = 'data/ajax/transmision/indexTransmision.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getTransmisionById = function(params_)
    {
        var url_    = 'data/ajax/transmision/indexTransmision.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updTransmision = function(params_)
    {
        var url_    = 'data/ajax/transmision/indexTransmision.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
