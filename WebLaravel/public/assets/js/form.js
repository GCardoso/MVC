/**
 * Created by Marcus on 09/11/2016.
 */

$("#BtnExibir").click(function () {
    $("#formCadastro").show("slow");
    $("#BtnExibir").hide();
});

$("#quantidade").mouseenter(function () {
   $("#quantidade").css("backgroundColor","black");
}).mouseleave(function(){
    $("#quantidade").css("backgroundColor","black");
});