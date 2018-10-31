
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('login_attemptsService', function($http){
    this.getLogin_attemptss = function()
    {
        var url_    = 'data/ajax/login_attempts/indexLogin_attempts.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setLogin_attempts = function(params_)
    {
        var url_    = 'data/ajax/login_attempts/indexLogin_attempts.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getLogin_attemptsById = function(params_)
    {
        var url_    = 'data/ajax/login_attempts/indexLogin_attempts.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updLogin_attempts = function(params_)
    {
        var url_    = 'data/ajax/login_attempts/indexLogin_attempts.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
