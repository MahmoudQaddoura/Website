const buttons = document.querySelectorAll("button");

buttons.forEach(function(button) {
  button.addEventListener("click", function() {
    alert("Item added to cart!");
  });
});