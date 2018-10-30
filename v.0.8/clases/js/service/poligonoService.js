
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('poligonoService', function($http){
    this.getPoligonos = function()
    {
        var url_    = 'data/ajax/poligono/indexPoligono.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setPoligono = function(params_)
    {
        var url_    = 'data/ajax/poligono/indexPoligono.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getPoligonoById = function(params_)
    {
        var url_    = 'data/ajax/poligono/indexPoligono.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updPoligono = function(params_)
    {
        var url_    = 'data/ajax/poligono/indexPoligono.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
