
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('slidehomeService', function($http){
    this.getSlidehomes = function()
    {
        var url_    = 'data/ajax/slidehome/indexSlidehome.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setSlidehome = function(params_)
    {
        var url_    = 'data/ajax/slidehome/indexSlidehome.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getSlidehomeById = function(params_)
    {
        var url_    = 'data/ajax/slidehome/indexSlidehome.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updSlidehome = function(params_)
    {
        var url_    = 'data/ajax/slidehome/indexSlidehome.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
