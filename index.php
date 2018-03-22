<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>spring pay!</title>
  </head>
  <body>
    <h1 class="text-center">sprint-pay Mobile payment!</h1>
    <form style="margin: 0 auto; width: 600px" method="post" action="public/orange-money.php">
         <h1 class="text-center">user infos!</h1>
	  <div class="form-group">
	    <label for="key">Api key</label>
	    <input type="text" class="form-control" id="key" name="key" aria-describedby="emailHelp" placeholder="Enter key">
	    <small id="key" class="form-text text-muted">api secret key.</small>
	  </div>
	  <div class="form-group">
	    <label for="secret">secret key.</label>
	    <input type="text" class="form-control" name="secret" id="secret" placeholder="Password">
	  </div>
        <h1 class="text-center"> payment infos!</a> </h1>
	  <div class="form-group">
	    <label for="phone">phone</label>
	    <input type="number" class="form-control" id="phone" name="phone"  placeholder="Enter your phone">
	    <small id="phone" class="form-text text-muted">phone number.</small>
	  </div>
	  <div class="form-group">
	    <label for="amount">amount.</label>
	    <input type="number" class="form-control" name="amount" id="amount" placeholder="enter the amount">
	  </div>
          <div class="form-group">
	    <label for="amount">method</label>
            <select name="method">
                <option value="orange">orange money</option>
                <option value="momo">mobile money</option>
            </select>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
    <div style="margin: 0 auto; width: 600px"><h1 class="text-center"> procced to <a href="public/payememt-status.php?processingNumber=152033018817138932740372472"> status !</a> </h1></div>
    <footer style="margin: 0 auto; width: 600px"><h1 class="text-center"> procced to <a href="public/card-payment.php"> card payment !</a> </h1></footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>