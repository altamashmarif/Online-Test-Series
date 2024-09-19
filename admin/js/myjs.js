$(function () {
  $("a[rel*=facebox]").facebox();
});
$(document).ready(function () {
  // Get the current URL
  var currentURL = window.location.href;

  // Find the link that matches the current URL
  $("a").each(function () {
    var linkURL = $(this).prop("href");
    if (linkURL == location.href) {
      $(this).addClass("mm-active");
      $(this).closest("ul").addClass("mm-show");
      return false; // Exit the loop if a match is found
    }
  });

  $("#chng_pass").submit(function (event) {
    // Prevent form submission
    event.preventDefault();

    // Get the values from the password fields
    var newPassword = $("#new_pass").val();
    var confirmPassword = $("#cp_pass").val();

    // Check if passwords match
    if (newPassword === confirmPassword) {
      // Passwords match, submit the form
      $("#chng_pass")[0].submit();
    } else {
      // Passwords don't match, display an alert
      alert("Password does not match. Please try again.");
    }
  });
});