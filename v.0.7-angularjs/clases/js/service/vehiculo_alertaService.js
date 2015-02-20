
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('vehiculo_alertaService', function($http){
    this.getVehiculo_alertas = function()
    {
        var url_    = 'data/ajax/vehiculo_alerta/indexVehiculo_alerta.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_, {'params': params_});
    };

    this.setVehiculo_alerta = function(params_)
    {
        var url_    = 'data/ajax/vehiculo_alerta/indexVehiculo_alerta.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getVehiculo_alertaById = function(params_)
    {
        var url_    = 'data/ajax/vehiculo_alerta/indexVehiculo_alerta.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, {'params': params_});
    };

    this.updVehiculo_alerta = function(params_)
    {
        var url_    = 'data/ajax/vehiculo_alerta/indexVehiculo_alerta.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
