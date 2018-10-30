
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('admisionService', function($http){
    this.getAdmisions = function()
    {
        var url_    = 'data/ajax/admision/indexAdmision.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setAdmision = function(params_)
    {
        var url_    = 'data/ajax/admision/indexAdmision.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getAdmisionById = function(params_)
    {
        var url_    = 'data/ajax/admision/indexAdmision.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updAdmision = function(params_)
    {
        var url_    = 'data/ajax/admision/indexAdmision.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
