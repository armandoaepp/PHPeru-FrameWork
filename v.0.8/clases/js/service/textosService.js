
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('textosService', function($http){
    this.getTextoss = function()
    {
        var url_    = 'data/ajax/textos/indexTextos.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setTextos = function(params_)
    {
        var url_    = 'data/ajax/textos/indexTextos.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getTextosById = function(params_)
    {
        var url_    = 'data/ajax/textos/indexTextos.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updTextos = function(params_)
    {
        var url_    = 'data/ajax/textos/indexTextos.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
