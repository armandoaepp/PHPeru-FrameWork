
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('transportistaService', function($http){
    this.getTransportistas = function()
    {
        var url_    = 'data/ajax/transportista/indexTransportista.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setTransportista = function(params_)
    {
        var url_    = 'data/ajax/transportista/indexTransportista.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getTransportistaById = function(params_)
    {
        var url_    = 'data/ajax/transportista/indexTransportista.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updTransportista = function(params_)
    {
        var url_    = 'data/ajax/transportista/indexTransportista.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
