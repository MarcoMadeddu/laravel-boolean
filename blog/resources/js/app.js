require('./bootstrap');

$(document).ready(function () {
    
    //setup 
    var filter = $('#filter')
        apiUrl = window.location.protocol + '//' + window.location.host + '/api/students/genders';
    
    filter.on('change' , function(){
        var gender = $(this).val();
       
        $.ajax({
            url: apiUrl,
            method: 'POST',
            data: {
                filter:gender
            }
        })
        .done(function(res){
            console.log(res);
            
        })
        .fail(function(){
            console.log('error');
            
        })
    })
        

});