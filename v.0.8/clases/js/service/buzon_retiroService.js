
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('buzon_retiroService', function($http){
    this.getBuzon_retiros = function()
    {
        var url_    = 'data/ajax/buzon_retiro/indexBuzon_retiro.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setBuzon_retiro = function(params_)
    {
        var url_    = 'data/ajax/buzon_retiro/indexBuzon_retiro.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getBuzon_retiroById = function(params_)
    {
        var url_    = 'data/ajax/buzon_retiro/indexBuzon_retiro.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updBuzon_retiro = function(params_)
    {
        var url_    = 'data/ajax/buzon_retiro/indexBuzon_retiro.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
