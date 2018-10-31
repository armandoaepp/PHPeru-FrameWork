
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('users_groupsService', function($http){
    this.getUsers_groupss = function()
    {
        var url_    = 'data/ajax/users_groups/indexUsers_groups.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setUsers_groups = function(params_)
    {
        var url_    = 'data/ajax/users_groups/indexUsers_groups.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getUsers_groupsById = function(params_)
    {
        var url_    = 'data/ajax/users_groups/indexUsers_groups.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updUsers_groups = function(params_)
    {
        var url_    = 'data/ajax/users_groups/indexUsers_groups.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
