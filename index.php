<?php
require( 'load.php' );

$letter_0 = chr( rand( 65, 90 ) );
$letter_1 = chr( rand( 65, 90 ) );
if ( $letter_1 == $letter_0 ) {
  $letter_1 = chr( rand( 65, 90 ) );
}
$letter_2 = chr( rand( 65, 90 ) );
if ( $letter_2 == $letter_1 || $letter_2 == $letter_0 ) {
  $letter_2 = chr( rand( 65, 90 ) );
}
$letter_3 = chr( rand( 65, 90 ) );
if ( $letter_3 == $letter_2 || $letter_3 == $letter_1 || $letter_3 == $letter_0 ) {
  $letter_3 = chr( rand( 65, 90 ) );
}
$letter_4 = chr( rand( 65, 90 ) );
if ( $letter_4 == $letter_3 || $letter_4 == $letter_2 || $letter_4 == $letter_1 || $letter_4 == $letter_0 ) {
  $letter_4 = chr( rand( 65, 90 ) );
}

$_taxes = get_taxes();
$__taxes = array_rand( $_taxes, 5 );
$tax_0 = $_taxes[$__taxes[0]];
$tax_1 = $_taxes[$__taxes[1]];
$tax_2 = $_taxes[$__taxes[2]];
$tax_3 = $_taxes[$__taxes[3]];
$tax_4 = $_taxes[$__taxes[4]];
?>
<!doctype html>

<html lang="en">
<head>
  <meta et="utf-8">

  <title>TermTax</title>
  <meta name="description" content="A game used to study for the Science Olympiad event Fast Facts">
  <meta name="author" content="Matt Beall">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="css/timecircles.css">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
  <header class="container">
    <div class="col-xs-9">
      <h1>TermTax</h1>
      <button class="btn btn-primary">Start</button>
    </div>
    <div class="col-xs-3">
      <div class="timer" data-timer="360"></div>
    </div>
  </header>
  <form id="main" class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th></th>
          <th id="tax_a"><?php echo $tax_0->tax_name; ?></th>
          <th id="tax_b"><?php echo $tax_1->tax_name; ?></th>
          <th id="tax_c"><?php echo $tax_2->tax_name; ?></th>
          <th id="tax_d"><?php echo $tax_3->tax_name; ?></th>
          <th id="tax_e"><?php echo $tax_4->tax_name; ?></th>
          <th>Letter Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th id="letter_0" scope="row"><?php echo $letter_0; ?></th>
          <td class="form-group"><input type="text" class="form-control letter-0 tax-0" id="letter_0_tax_0"></td>
          <td class="form-group"><input type="text" class="form-control letter-0 tax-1" id="letter_0_tax_1"></td>
          <td class="form-group"><input type="text" class="form-control letter-0 tax-2" id="letter_0_tax_2"></td>
          <td class="form-group"><input type="text" class="form-control letter-0 tax-3" id="letter_0_tax_3"></td>
          <td class="form-group"><input type="text" class="form-control letter-0 tax-4" id="letter_0_tax_4"></td>
          <td class="form-group"><input type="text" class="form-control" id="total_letter_0" disabled></td>
        </tr>
        <tr>
          <th id="letter_1" scope="row"><?php echo $letter_1; ?></th>
          <td class="form-group"><input type="text" class="form-control letter-1 tax-0" id="letter_1_tax_0"></td>
          <td class="form-group"><input type="text" class="form-control letter-1 tax-1" id="letter_1_tax_1"></td>
          <td class="form-group"><input type="text" class="form-control letter-1 tax-2" id="letter_1_tax_2"></td>
          <td class="form-group"><input type="text" class="form-control letter-1 tax-3" id="letter_1_tax_3"></td>
          <td class="form-group"><input type="text" class="form-control letter-1 tax-4" id="letter_1_tax_4"></td>
          <td class="form-group"><input type="text" class="form-control" id="total_letter_1" disabled></td>
        </tr>
        <tr>
          <th id="letter_2" scope="row"><?php echo $letter_2; ?></th>
          <td class="form-group"><input type="text" class="form-control letter-2 tax-0" id="letter_2_tax_0"></td>
          <td class="form-group"><input type="text" class="form-control letter-2 tax-1" id="letter_2_tax_1"></td>
          <td class="form-group"><input type="text" class="form-control letter-2 tax-2" id="letter_2_tax_2"></td>
          <td class="form-group"><input type="text" class="form-control letter-2 tax-3" id="letter_2_tax_3"></td>
          <td class="form-group"><input type="text" class="form-control letter-2 tax-4" id="letter_2_tax_4"></td>
          <td class="form-group"><input type="text" class="form-control" id="total_letter_2" disabled></td>
        </tr>
        <tr>
          <th id="letter_3" scope="row"><?php echo $letter_3; ?></th>
          <td class="form-group"><input type="text" class="form-control letter-3 tax-0" id="letter_3_tax_0"></td>
          <td class="form-group"><input type="text" class="form-control letter-3 tax-1" id="letter_3_tax_1"></td>
          <td class="form-group"><input type="text" class="form-control letter-3 tax-2" id="letter_3_tax_2"></td>
          <td class="form-group"><input type="text" class="form-control letter-3 tax-3" id="letter_3_tax_3"></td>
          <td class="form-group"><input type="text" class="form-control letter-3 tax-4" id="letter_3_tax_4"></td>
          <td class="form-group"><input type="text" class="form-control" id="total_letter_3" disabled></td>
        </tr>
        <tr>
          <th id="letter_4" scope="row"><?php echo $letter_4; ?></th>
          <td class="form-group"><input type="text" class="form-control letter-4 tax-0" id="letter_4_tax_0"></td>
          <td class="form-group"><input type="text" class="form-control letter-4 tax-1" id="letter_4_tax_1"></td>
          <td class="form-group"><input type="text" class="form-control letter-4 tax-2" id="letter_4_tax_2"></td>
          <td class="form-group"><input type="text" class="form-control letter-4 tax-3" id="letter_4_tax_3"></td>
          <td class="form-group"><input type="text" class="form-control letter-4 tax-4" id="letter_4_tax_4"></td>
          <td class="form-group"><input type="text" class="form-control" id="total_letter_4" disabled></td>
        </tr>
        <tr>
          <th scope="row">Tax Total</th>
          <td class="form-group"><input type="text" class="form-control" id="total_tax_0" disabled></td>
          <td class="form-group"><input type="text" class="form-control" id="total_tax_1" disabled></td>
          <td class="form-group"><input type="text" class="form-control" id="total_tax_2" disabled></td>
          <td class="form-group"><input type="text" class="form-control" id="total_tax_3" disabled></td>
          <td class="form-group"><input type="text" class="form-control" id="total_tax_4" disabled></td>
          <td class="form-group"><button class="btn btn-block btn-primary">Submit</button></td>
        </tr>
      </tbody>
    </table>
  </form>
  <footer>
  </footer>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/timecircles.js"></script>
  <script type="text/javascript">
    $(".timer").TimeCircles({
      "animation": "smooth",
      "bg_width": 0.7,
      "fg_width": 0.1,
      "circle_bg_color": "#eeeeee",
      "count_past_zero": false,
      "time": {
        "Days": {
          "text": "Days",
          "color": "#FFCC66",
          "show": false
        },
        "Hours": {
          "text": "Hours",
          "color": "#99CCFF",
          "show": false
        },
        "Minutes": {
          "text": "Minutes",
          "color": "#aaaaaa",
          "show": true
        },
        "Seconds": {
          "text": "Seconds",
          "color": "#777",
          "show": true
        }
      }
    });
    window.setTimeout( stopTimer, 359000 );
    function stopTimer() {
      $('.form-control').prop( "disabled", true );
    }
  </script>
