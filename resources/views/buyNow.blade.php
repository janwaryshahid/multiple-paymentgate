<form action="{{route('checkout')}}" method="post">
  @csrf
<div class="checkout-container">
  <h2>Checkout</h2>

  <!-- Payment Gateway Selection (PayPal or Stripe) -->
  <div class="input-group">
    <label for="paymentGateway">Select Payment Method</label>
    <select id="paymentGateway" name="paymentGateway" required>
      <option value="paypal">PayPal</option>
      <option value="stripe">Stripe</option>
    </select>
    @error('paymentGateway')
        <span style="color:red">{{$message}}</span>
    @enderror
    
  </div>

  <!-- User Information Fields -->
  <div class="user-info">
    <div class="input-group">
      <label for="fullName">Full Name</label>
      <input type="text" id="fullName" name="fullName" required placeholder="John Doe">
      @error('fullName')
        <span style="color:red">{{$message}}</span>
    @enderror
    
    </div>

    <div class="input-group">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" required placeholder="johndoe@example.com">
      @error('email')
      <span style="color:red">{{$message}}</span>
  @enderror
    </div>

    <div class="input-group">
      <label for="address">Billing Address</label>
      <input type="text" id="address" name="address" required placeholder="123 Main St, City, State">
      @error('address')
      <span style="color:red">{{$message}}</span>
  @enderror
    </div>
  </div>

  <!-- Submit Button -->
  <button type="submit" class="submit-btn">Proceed to Payment</button>
</div>
</form>

<style>
  .checkout-container {
    width: 100%;
    max-width: 500px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #f9f9f9;
  }

  h2 {
    text-align: center;
  }

  .input-group {
    margin-bottom: 15px;
  }

  .input-group label {
    display: block;
    margin-bottom: 5px;
  }

  .input-group input, .input-group select {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .submit-btn {
    width: 100%;
    padding: 12px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }

  .submit-btn:hover {
    background-color: #45a049;
  }
</style>
