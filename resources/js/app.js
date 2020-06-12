const { filter } = require('lodash');

require('./bootstrap');

$(document).ready(function () {
    //Setup
    var filter = $('#filter');
    var apiUrl = window.location.protocol + '//' + window.location.host + '/api/students/genders'
    
    filter.on('change', function() { 
        var gender = $(this).val();
        console.log(gender);
        
        print(apiUrl, gender)
    })
    
});

function print(apiUrl, gender) {

    var settings = {
        url: apiUrl,
        method: 'POST',
        data: {
            filter: gender
        }
    }

    $.ajax(settings)
    .done(res =>{
        
        if (res.response.length > 0) {
            var dati = res.response
            dati.forEach(element => {
                console.log(element);
                
            })
        } else{
            console.log(res.error);
            
        }

    })
    .fail(error => {
        console.log("Si è verificato un errore " + error.status);
    })
}