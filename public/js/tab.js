$(function(){
    $('a[title]').tooltip();
});




window.setInterval(function(){

    var p = $('#tabPaciente').height();
    var d = $('#tabDentista').height();

    if (p > d){
        document.getElementById('tabDentista').style.height = p + "px";
    }
    else{
        document.getElementById('tabPaciente').style.height = d + "px";
    }

}, 1000);



