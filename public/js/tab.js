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



$(function() {
    $('#_main-btn').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 900, 'swing');
    });
});


$('.carousel').carousel({
    interval: 4000
})