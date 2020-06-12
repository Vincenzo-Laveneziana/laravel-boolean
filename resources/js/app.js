const { filter } = require('lodash');

require('./bootstrap');

$(document).ready(function () {

    //handlebars
    var source = $("#student-template").html();
    var template = Handlebars.compile(source); 

    //Setup
    var container = $('.students');
    var filter = $('#filter');
    var apiUrl = window.location.protocol + '//' + window.location.host + '/api/students/genders'
    
    filter.on('change', function() { 
        var gender = $(this).val();
        //console.log(gender);
        
        print(apiUrl, gender, template,container);
    })
    
});

function print(apiUrl, gender,template,container) {

    var settings = {
        url: apiUrl,
        method: 'POST',
        data: {
            filter: gender
        }
    }

    container.html("");

    $.ajax(settings)
    .done(res =>{
        
        if (res.response.length > 0) {
            
            res.response.forEach(element => {
                console.log(element);
                
                var context = {
                    slug: element.slug,
                    img: element.img,
                    nome: element.nome,
                    eta: element.eta,
                    azienda: (element.genere == 'm') ? 'Assunto' : 'Assunta',
                    ruolo: element.ruolo,
                    descrizione: element.descrizione
                };
                container.append(template(context))
                
            })
        } else{
            console.log(res.error);
            
        }

    })
    .fail(error => {
        console.log("Si è verificato un errore " + error.status);
    })
}