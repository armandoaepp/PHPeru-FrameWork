
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('chefService', function($http){
    this.getChefs = function()
    {
        var url_    = 'data/ajax/chef/indexChef.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setChef = function(params_)
    {
        var url_    = 'data/ajax/chef/indexChef.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getChefById = function(params_)
    {
        var url_    = 'data/ajax/chef/indexChef.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updChef = function(params_)
    {
        var url_    = 'data/ajax/chef/indexChef.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
