
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('evento_imgService', function($http){
    this.getEvento_imgs = function()
    {
        var url_    = 'data/ajax/evento_img/indexEvento_img.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setEvento_img = function(params_)
    {
        var url_    = 'data/ajax/evento_img/indexEvento_img.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getEvento_imgById = function(params_)
    {
        var url_    = 'data/ajax/evento_img/indexEvento_img.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updEvento_img = function(params_)
    {
        var url_    = 'data/ajax/evento_img/indexEvento_img.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
