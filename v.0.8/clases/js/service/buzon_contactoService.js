
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('buzon_contactoService', function($http){
    this.getBuzon_contactos = function()
    {
        var url_    = 'data/ajax/buzon_contacto/indexBuzon_contacto.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setBuzon_contacto = function(params_)
    {
        var url_    = 'data/ajax/buzon_contacto/indexBuzon_contacto.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getBuzon_contactoById = function(params_)
    {
        var url_    = 'data/ajax/buzon_contacto/indexBuzon_contacto.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updBuzon_contacto = function(params_)
    {
        var url_    = 'data/ajax/buzon_contacto/indexBuzon_contacto.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
