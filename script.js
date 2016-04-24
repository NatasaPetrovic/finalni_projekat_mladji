$(document).ready(function() {
    $(".clanovi").hide();
    
    $(".imgavfave").click(function() {
       $clan = $(this).attr("id").substr(10,1);
       $(".clanovi").hide();
       $(".clanovi[value=" + $clan + "]").show();
    });
})