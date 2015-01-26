
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('acceso_vehiculoService', function($http){
    this.getAcceso_vehiculos = function()
    {
        var url_    = 'data/ajax/acceso_vehiculo/indexAcceso_vehiculo.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_, {'params': params_});
    };

    this.setAcceso_vehiculo = function(params_)
    {
        var url_    = 'data/ajax/acceso_vehiculo/indexAcceso_vehiculo.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getAcceso_vehiculoById = function(params_)
    {
        var url_    = 'data/ajax/acceso_vehiculo/indexAcceso_vehiculo.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, {'params': params_});
    };

    this.updAcceso_vehiculo = function(params_)
    {
        var url_    = 'data/ajax/acceso_vehiculo/indexAcceso_vehiculo.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
