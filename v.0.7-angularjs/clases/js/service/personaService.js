
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('personaService', function($http){
    this.getPersonas = function()
    {
        var url_    = 'data/ajax/persona/indexPersona.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_, {'params': params_});
    };

    this.setPersona = function(params_)
    {
        var url_    = 'data/ajax/persona/indexPersona.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getPersonaById = function(params_)
    {
        var url_    = 'data/ajax/persona/indexPersona.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, {'params': params_});
    };

    this.updPersona = function(params_)
    {
        var url_    = 'data/ajax/persona/indexPersona.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
