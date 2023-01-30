  // Get all the input elements for quantity
  var inputs = document.querySelectorAll('input[type="number"]');
  
  // Loop through all the inputs and add an event listener for change
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener('change', updateTotal);
  }
  
  function updateTotal() {
    // Get the parent row of the input that was changed
    var row = this.parentNode.parentNode;
    
    // Get the price and quantity values
    var price = parseFloat(row.cells[1].innerHTML.substring(1));
    var quantity = parseInt(this.value);
    
    // Update the total cell with the new total
    row.cells[3].innerHTML = '$' + (price * quantity).toFixed(2);
    
    // Get all the total cells
    var totals = document.querySelectorAll('td:last-child');
    
    // Calculate the subtotal by adding up all the totals
    var subtotal = 0;
    for (var i = 0; i < totals.length; i++) {
      subtotal += parseFloat(totals[i].innerHTML.substring(1));
    }
    
    // Update the subtotal row with the new subtotal
    document.querySelector('tr:last-child td:last-child').innerHTML = '$' + subtotal.toFixed(2);
  }
