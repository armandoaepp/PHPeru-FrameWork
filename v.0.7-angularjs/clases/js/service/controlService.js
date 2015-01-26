
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('controlService', function($http){
    this.getControls = function()
    {
        var url_    = 'data/ajax/control/indexControl.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_, {'params': params_});
    };

    this.setControl = function(params_)
    {
        var url_    = 'data/ajax/control/indexControl.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getControlById = function(params_)
    {
        var url_    = 'data/ajax/control/indexControl.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, {'params': params_});
    };

    this.updControl = function(params_)
    {
        var url_    = 'data/ajax/control/indexControl.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
