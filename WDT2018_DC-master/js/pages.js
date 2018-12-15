$(document).ready(function() {
  $("#convention").hide();
  $("#conventionHead").click(function() {
    $("#convention").slideToggle();
  });
  $("#event").hide();
  $("#eventHead").click(function() {
    $("#event").slideToggle();
  });
  $("#dressCode").hide();
  $("#dressCodeHead").click(function() {
    $("#dressCode").slideToggle();
  });
});
