require('./bootstrap');


$(document).ready(function() {

    //setup 
    var filter = $('#filter'),
        apiUrl = window.location.protocol + '//' + window.location.host + '/api/students/genders';

    var source = $('#').html();
    var template = Handlebars.compile(source);

    filter.on('change' , function(){
        var gender = $(this).val();

        $.ajax({
            url: apiUrl,
            method: 'POST',
            data:{
                filter: gender
            }
        })
        .done(function(res){
            if( res.response.length > 0 ){
                //mostra

                for(var i=0; i<res.response.length; i++){
                    var item = res.response[i];

                    var context = {
                        slug : item.slug,
                        img: item.img,
                        nome: item.nome, 
                        eta : item.eta,
                        assunzione: (item.genere == 'm')?'assunto':'assunta',
                        azienda: item.azienda,
                        ruolo: item.ruolo,  
                        descrizione: item.descrizione,
                    }

                    var output = template(context);
                    container.append(output);
                }
            }else{
                //mostra errore
            }

        })
        .fail(function(){

        });
    });
