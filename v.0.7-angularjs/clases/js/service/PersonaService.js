
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('personaService', function($http){
    this.getPersonas = function(params_)
    {
        var url_    = 'data/ajax/persona/indexPersona.php';
        return $http.get(url_, {'params': params_});
    };

    this.setPersona = function(persona)
    {
        var url_    = 'data/ajax/persona/indexPersona.php';
        return $http.post(url_,persona );
    };

    this.getPersonaById = function(persona)
    {
        var url_    = 'data/ajax/persona/indexPersona.php';
        return $http.get(url_, {'params': params_});
    };

    this.updPersona = function(persona)
    {
        var url_    = 'data/ajax/persona/indexPersona.php';
        return $http.post(url_,persona );
    };

});
