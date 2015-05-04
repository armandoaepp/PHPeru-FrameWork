
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('comisionService', function($http){
    this.getComisions = function()
    {
        var url_    = 'data/ajax/comision/indexComision.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setComision = function(params_)
    {
        var url_    = 'data/ajax/comision/indexComision.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getComisionById = function(params_)
    {
        var url_    = 'data/ajax/comision/indexComision.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updComision = function(params_)
    {
        var url_    = 'data/ajax/comision/indexComision.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
