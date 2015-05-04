
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('geocoderService', function($http){
    this.getGeocoders = function()
    {
        var url_    = 'data/ajax/geocoder/indexGeocoder.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setGeocoder = function(params_)
    {
        var url_    = 'data/ajax/geocoder/indexGeocoder.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getGeocoderById = function(params_)
    {
        var url_    = 'data/ajax/geocoder/indexGeocoder.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updGeocoder = function(params_)
    {
        var url_    = 'data/ajax/geocoder/indexGeocoder.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
