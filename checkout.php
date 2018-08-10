<?php require_once('./config.php'); ?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<form action="charge.php" method="post">
<input type="number" class="form-control" name="amount" id="custom-donation-amount" placeholder="50.00" min="0" step="10.00" />
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
         
          data-description="Access for a year"         
          data-locale="auto" 
          id="donate-button"></script>
</form>

<script type="text/javascript">

$(document).ready(function () {

	$(function() {
        $('.stripe-button-el').click(function(event) {
            var amount = Math.round($('#custom-donation-amount').val());        
            $('#donate-button').attr('data-amount', amount*100)
        });
    });	
  //your code here
});

    
</script>
</body>
</html>
