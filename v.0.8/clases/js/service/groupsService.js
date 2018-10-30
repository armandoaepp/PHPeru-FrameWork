
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('groupsService', function($http){
    this.getGroupss = function()
    {
        var url_    = 'data/ajax/groups/indexGroups.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setGroups = function(params_)
    {
        var url_    = 'data/ajax/groups/indexGroups.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getGroupsById = function(params_)
    {
        var url_    = 'data/ajax/groups/indexGroups.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updGroups = function(params_)
    {
        var url_    = 'data/ajax/groups/indexGroups.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
