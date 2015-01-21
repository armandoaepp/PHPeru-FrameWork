
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('monedaService', function($http){
    this.getMonedas = function(params_)
    {
        var url_    = 'data/ajax/moneda/indexMoneda.php';
        return $http.get(url_, {'params': params_});
    };

    this.setMoneda = function(moneda)
    {
        var url_    = 'data/ajax/moneda/indexMoneda.php';
        return $http.post(url_,moneda );
    };

    this.getMonedaById = function(params_)
    {
        var url_    = 'data/ajax/moneda/indexMoneda.php';
        return $http.get(url_, {'params': params_});
    };

    this.updMoneda = function(moneda)
    {
        var url_    = 'data/ajax/moneda/indexMoneda.php';
        return $http.post(url_,moneda );
    };

});
