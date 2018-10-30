
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('usersService', function($http){
    this.getUserss = function()
    {
        var url_    = 'data/ajax/users/indexUsers.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setUsers = function(params_)
    {
        var url_    = 'data/ajax/users/indexUsers.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getUsersById = function(params_)
    {
        var url_    = 'data/ajax/users/indexUsers.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updUsers = function(params_)
    {
        var url_    = 'data/ajax/users/indexUsers.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
