<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- jquery -->
    <script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CompuNet T&amp;C</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
    $(document).ready(function () {
      $('#agree').change(function () {
        $('#accept').prop('disabled', ! this.checked);
      });
    });
    </script>
  </head>

  <body>

    <!-- Header -->
    <div class="jumbotron">
      <div class="container">
        <h1>AWS Terms &amp; Conditions</h1>
        <p>By checking the box below and clicking <i>Agree</i>, you are indicating that you have read the terms, conditions, and SLA / MSA documents linked below and agree to abide by all provisions set forth therein.</p>


        <form action="/accept" method="post">

        <input type="hidden" name="platform" value="AWS"/>
        <input type="hidden" name="company" value="<?php echo $company; ?>"/>

        <input type="checkbox" name="checkbox" value="check" id="agree" /> I have read and agree to the Terms, Conditions and SLA / MSA documents
        <!--<input type="checkbox"  
onchange="document.getElementById('grabaperaus').disabled = !this.checked;" name='visto' 
id='visto'/>-->
        <!--<input type="submit" name="submit" value="submit" />-->

        <p></p>
        <p><button id="accept" type="submit" class="btn btn-success btn-lg" disabled>Agree &raquo;</button></p>
        </form>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
          <h2>AWS Reseller Terms</h2>
          <p>This document describes the terms governing your use of the AWS service.</p>
          <p><a class="btn btn-default" href="https://s3.us-east-2.amazonaws.com/compunetpublicdocs/AWS%2BReseller%2BCustomer%2BLicense%2BTerms.pdf" role="button" target="_new">View document &raquo;</a></p>
        </div>
        <div class="col-md-6">
          <h2>AWS SLA/MSA</h2>
          <p>This document outlines the SLA and Master Service Agreement</p>
          <p><a class="btn btn-default" href="https://s3.us-east-2.amazonaws.com/compunetpublicdocs/CompuNet+MSA.pdf" role="button" target="_new">View document &raquo;</a></p>
       </div>
      </div>

      <hr>

      <footer>
        <p>&copy; <?php echo date("Y"); ?> CompuNet, Inc.</p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>
