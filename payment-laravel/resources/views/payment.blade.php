<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form method="POST" action="{{route('paysubmit')}}" class="container mt-5">
@csrf
  <div class="mb-3">
    <label  class="form-label">payment</label>
    <br>
    <span>Amount</span>
    <input type="text" name="amount" class="form-control" >
  </div>
  
  <input type="submit" class="btn btn-primary" value="Make Payment">
</form>
</body>
</html>