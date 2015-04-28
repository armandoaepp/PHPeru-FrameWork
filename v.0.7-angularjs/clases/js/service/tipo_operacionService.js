
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('tipo_operacionService', function($http){
    this.getTipo_operacions = function()
    {
        var url_    = 'data/ajax/tipo_operacion/indexTipo_operacion.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setTipo_operacion = function(params_)
    {
        var url_    = 'data/ajax/tipo_operacion/indexTipo_operacion.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getTipo_operacionById = function(params_)
    {
        var url_    = 'data/ajax/tipo_operacion/indexTipo_operacion.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updTipo_operacion = function(params_)
    {
        var url_    = 'data/ajax/tipo_operacion/indexTipo_operacion.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
