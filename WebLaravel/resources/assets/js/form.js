/**
 * Created by Marcus on 09/11/2016.
 */

$('#dados').click(function(){
   $('#form').show('slow');
   $('#form1').hide();
});

$("#quantidade").mouseenter(function () {
   $("#dados").css("backgroundColor","black");
}).mouseleave(function(){
   $("#quantidade").css("backgroundColor","black");
});