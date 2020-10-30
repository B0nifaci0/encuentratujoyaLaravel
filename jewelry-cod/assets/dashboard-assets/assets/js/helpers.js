$(document).ready(function(){

  $(".form-control").keydown(function(){
    if ($(this).val() == "") {
      $(this).attr("class", "form-control empty");
    }else{
      $(this).attr("class", "form-control");
    }
  });

});
