
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('rol_controlService', function($http){
    this.getRol_controls = function()
    {
        var url_    = 'data/ajax/rol_control/indexRol_control.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_, {'params': params_});
    };

    this.setRol_control = function(params_)
    {
        var url_    = 'data/ajax/rol_control/indexRol_control.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getRol_controlById = function(params_)
    {
        var url_    = 'data/ajax/rol_control/indexRol_control.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, {'params': params_});
    };

    this.updRol_control = function(params_)
    {
        var url_    = 'data/ajax/rol_control/indexRol_control.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
