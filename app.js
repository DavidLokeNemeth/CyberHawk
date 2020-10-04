//Global variable (store ajax response)
let input;

//One page loader
function loadMain(htmlName){
    let id = window.setTimeout(function() {}, 0);
    while (id--) {
        window.clearTimeout(id);
    }
    $("#main").load('mains/'+htmlName);
}

//AJAX call from backend
function loadReport() {
    $.ajax({
        type: "GET",
        url: "Backend.php",
        dataType:'JSON',
        success: function(response){
            input = response;
        }
    });
}