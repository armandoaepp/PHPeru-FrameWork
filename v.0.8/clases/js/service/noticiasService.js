
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('noticiasService', function($http){
    this.getNoticiass = function()
    {
        var url_    = 'data/ajax/noticias/indexNoticias.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setNoticias = function(params_)
    {
        var url_    = 'data/ajax/noticias/indexNoticias.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getNoticiasById = function(params_)
    {
        var url_    = 'data/ajax/noticias/indexNoticias.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updNoticias = function(params_)
    {
        var url_    = 'data/ajax/noticias/indexNoticias.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
