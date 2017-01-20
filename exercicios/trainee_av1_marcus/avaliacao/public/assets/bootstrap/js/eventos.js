$(function() {
    $("#data_de_nascimento").attr("type", "date");
    $("h1").hide().delay(1000).fadeIn('slow');
    $("#selecione").click(function () {
        $("#check #item ").attr("checked", "checked");
    })
});

