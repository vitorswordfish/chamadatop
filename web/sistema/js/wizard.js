$(document).ready(function() {

  $('.adicionar').click(function () {
    $('#modal-adicao').modal('show');
  });

  $("#modal-adicao").on('shown.bs.modal', function () {
    $('#wizard').smartWizard('fixHeight');
    $("#step-1").css({"overflow-y": "hidden"});
  });

  $('#wizard').smartWizard({
  onFinish:onFinishCallback
  });

  function onFinishCallback(){
   $('#formulario').submit();
 }


});
