<!DOCTYPE html>
<html>
<head>
  <title>Simple Checkout Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .checkout {
      display: flex;
      flex-direction: column;
      width: 300px;
      gap: 10px;
    }
    .checkout input {
      padding: 10px;
      font-size: 16px;
    }
    .checkout button {
      padding: 10px;
      font-size: 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
    }
    .btn{
        color: brown;
        padding: 10px;
        cursor: pointer;
    }
  </style>
</head>
<body>

<h2>Checkout Form</h2>

<div class="checkout">
  <input type="text" id="cardNumber" placeholder="Card Number" required>
  <input type="text" id="cardExpiry" placeholder="MM/YY" required>
  <input type="text" id="cardCVC" placeholder="CVC" required>
  
  <button type="submit" id="payButton" class="btn">Pay</button>
</div>

</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
  var stripe = Stripe('your-publishable-key-here');
  
  document.getElementById('payButton').addEventListener('click', function() {
    // Get the card details from the form
    var cardNumber = document.getElementById('cardNumber').value;
    var cardExpiry = document.getElementById('cardExpiry').value;
    var cardCVC = document.getElementById('cardCVC').value;

    // TODO: Validate the card details

    // TODO: Send the card details to Stripe for payment processing
  });
</script>

</body>
</html>