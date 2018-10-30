
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('eventoService', function($http){
    this.getEventos = function()
    {
        var url_    = 'data/ajax/evento/indexEvento.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setEvento = function(params_)
    {
        var url_    = 'data/ajax/evento/indexEvento.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getEventoById = function(params_)
    {
        var url_    = 'data/ajax/evento/indexEvento.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updEvento = function(params_)
    {
        var url_    = 'data/ajax/evento/indexEvento.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
