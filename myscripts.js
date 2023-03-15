function addQuantity() {
    var quantityInput = document.getElementById("itemQuantity");
    var quantityValue = parseInt(quantityInput.value);
    quantityInput.value = quantityValue + 1;
  }

  function minusQuantity() {
    var quantityInput = document.getElementById("itemQuantity");
    var quantityValue = parseInt(quantityInput.value);
    if (quantityValue > 0) {
      quantityInput.value = quantityValue - 1;
    }
  }

