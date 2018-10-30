
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('traslado_preguntaService', function($http){
    this.getTraslado_preguntas = function()
    {
        var url_    = 'data/ajax/traslado_pregunta/indexTraslado_pregunta.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setTraslado_pregunta = function(params_)
    {
        var url_    = 'data/ajax/traslado_pregunta/indexTraslado_pregunta.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getTraslado_preguntaById = function(params_)
    {
        var url_    = 'data/ajax/traslado_pregunta/indexTraslado_pregunta.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updTraslado_pregunta = function(params_)
    {
        var url_    = 'data/ajax/traslado_pregunta/indexTraslado_pregunta.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
