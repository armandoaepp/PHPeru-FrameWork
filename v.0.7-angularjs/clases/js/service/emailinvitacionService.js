
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('emailinvitacionService', function($http){
    this.getEmailinvitacions = function()
    {
        var url_    = 'data/ajax/emailinvitacion/indexEmailinvitacion.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setEmailinvitacion = function(params_)
    {
        var url_    = 'data/ajax/emailinvitacion/indexEmailinvitacion.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getEmailinvitacionById = function(params_)
    {
        var url_    = 'data/ajax/emailinvitacion/indexEmailinvitacion.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updEmailinvitacion = function(params_)
    {
        var url_    = 'data/ajax/emailinvitacion/indexEmailinvitacion.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
