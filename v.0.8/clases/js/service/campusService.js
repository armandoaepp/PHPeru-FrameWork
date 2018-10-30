
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('campusService', function($http){
    this.getCampuss = function()
    {
        var url_    = 'data/ajax/campus/indexCampus.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setCampus = function(params_)
    {
        var url_    = 'data/ajax/campus/indexCampus.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getCampusById = function(params_)
    {
        var url_    = 'data/ajax/campus/indexCampus.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updCampus = function(params_)
    {
        var url_    = 'data/ajax/campus/indexCampus.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
