
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('categoriaService', function($http){
    this.getCategorias = function()
    {
        var url_    = 'data/ajax/categoria/indexCategoria.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setCategoria = function(params_)
    {
        var url_    = 'data/ajax/categoria/indexCategoria.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getCategoriaById = function(params_)
    {
        var url_    = 'data/ajax/categoria/indexCategoria.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updCategoria = function(params_)
    {
        var url_    = 'data/ajax/categoria/indexCategoria.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
