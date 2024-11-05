<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form  class="container mt-5">

  <div class="mb-3">
  <p> Order Id: {{$orderid}}</p>

    <br>
    
    <p>Amount: {{number_format($razoparData->amount /100,2)}}</p>

  </div>
  
  <div class="form-group tex-center">
                <button class="btn btn-primary"  id="button1">Pay Now</button>
            </div>
</form>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_ksNMeLlPOkgzCD",
    "amount": "{{$razoparData->amount}}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Suman", //your business name
    "description": "Test Transaction",
    "image": "{{ asset('images/df/1723533709.png') }}",
    "order_id": "{{$orderid}}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        "name": "{suman sharma}", //your customer's name
        "email": "suman.kumar@example.com",
        "contact": "8890488989" //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": ";ljlhhjhki kjkg hghggh"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
</body>
</html>