"use strict";
var loadPrice = false;

var request = new XMLHttpRequest();
var url = "currencies/recalculation.php";
request.open('GET', url);
request.setRequestHeader('Content-Type', 'application/x-www-form-url');
request.addEventListener("readystatechange", function() {
    if (request.readyState === 4 && request.status === 200) {
        var prises = document.getElementsByClassName('price-currency');
        var currencies = JSON.parse(request.responseText);
        var valute = currencies.Valute;

        for(var i=0; i<prises.length; i++){
            var element = prises[i];
            var attrCurrency = element.getAttribute('data-currency')
            var price = parseInt((element.innerHTML.replace("&nbsp;", "")).split(" ").join(""));
            if (attrCurrency != 'RUB')
            {
                var newPrice = price*valute[attrCurrency].Value;
                if (countDigits(newPrice) > 6){
                    newPrice = Math.round( newPrice / 1000 ) * 1000;
                }else if (countDigits(newPrice) == 6 || countDigits(newPrice) == 5){
                    newPrice = Math.round( newPrice / 100 ) * 100;
                }else {
                    newPrice = Math.ceil(newPrice);
                }
                element.innerHTML = divideNumberByPieces(newPrice);
            }
        }
        loadPrice = true;
    }
});
// Выполняем запрос
request.send();

function countDigits(n) {
    for(var i = 0; n > 1; i++) {
        n /= 10;
    }
    return i;
}

function divideNumberByPieces(x, delimiter) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, delimiter || " ");
}






