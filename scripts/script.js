$(document).ready(function(){
  $("#logos").click(function(){
    $("#section").load('logos.php');
  });

  $("#cards").click(function(){
    $("#section").load('cards.php');
  });

  $("#pop").on("click", function(e) {
    // e.preventDefault() this is stopping the redirect to the image its self
    e.preventDefault();
    // #the-modal is the img tag that I use as the modal.
    $('#popmodal').modal('toggle');
  });

});
