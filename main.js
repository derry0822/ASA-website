var main = function(){
  var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1000,
    offset: 0
  });

  $('#header h1').show('fade', 2000);
}


$(document).ready(function () {
  $("#mainForm").on("submit", function() {
    var formValid = true;
    var nameIsValid = $("#name").prop("validity").valid;
    if(nameIsValid) {
      $("#nameError").hide();
    } else {
      $("#nameError").show();
      formValid = false;
    }

    //Email
    if($("#email").prop("validity").valueMissing) {
      $("#emailError").show();
      formValid = false;

    } else {
      $("#emailError").hide();
    }

    if($("#email").prop("validity").typeMismatch) {
      $("#emailErrorFill").show();
      formValid = false;

    } else {
      $("#emailErrorFill").hide();
    }

//message
    var messageValid = $("#message").prop("validity").valid;
    if(messageValid){
      $("#msgError").hide();
      formValid = true;
    }else{
      $("#msgError").show();
      formValid = false;
    }
    return formValid;

  });
});
