$(document).ready(function() {
    $(".faq-question").click(function() {
      var answer = $(this).next(".faq-answer");
      var sign = $(this).find(".faq-sign");
      
      // Toggle the answer visibility
      answer.slideToggle();
      
      // Change the sign from + to -
      if (answer.is(":visible")) {
        sign.text("-");
      } else {
        sign.text("+");
      }
  
      // Optional: Adds an active class if you want to style the button differently when it's open
      $(this).toggleClass("active");
    });
  });
  