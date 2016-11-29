<?php
require( 'load.php' );

$CHAR0 = $_POST['letter_0_value'];
$CHAR1 = $_POST['letter_1_value'];
$CHAR2 = $_POST['letter_2_value'];
$CHAR3 = $_POST['letter_3_value'];
$CHAR4 = $_POST['letter_4_value'];

$TAX0 = $_POST['tax_0_name'];
$TAX1 = $_POST['tax_1_name'];
$TAX2 = $_POST['tax_2_name'];
$TAX3 = $_POST['tax_3_name'];
$TAX4 = $_POST['tax_4_name'];
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
      <a class="btn btn-primary" href="index.php">New Grid</a>
    </div>
    <div class="col-xs-3">
    </div>
  </header>
  <div id="main" class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th></th>
          <th id="tax_a"><?php echo $TAX0; ?></th>
          <th id="tax_b"><?php echo $TAX1; ?></th>
          <th id="tax_c"><?php echo $TAX2; ?></th>
          <th id="tax_d"><?php echo $TAX3; ?></th>
          <th id="tax_e"><?php echo $TAX4; ?></th>
          <th>Letter Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th name="letter_0" scope="row"><?php echo $CHAR0; ?></th>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR0; ?>" data-tax="<?php echo $TAX0; ?>" value="<?php echo $_POST['letter_0_tax_0']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR0; ?>" data-tax="<?php echo $TAX1; ?>" value="<?php echo $_POST['letter_0_tax_1']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR0; ?>" data-tax="<?php echo $TAX2; ?>" value="<?php echo $_POST['letter_0_tax_2']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR0; ?>" data-tax="<?php echo $TAX3; ?>" value="<?php echo $_POST['letter_0_tax_3']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR0; ?>" data-tax="<?php echo $TAX4; ?>" value="<?php echo $_POST['letter_0_tax_4']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control" id="total_letter_0" disabled></td>
        </tr>
        <tr>
          <th name="letter_1" scope="row"><?php echo $CHAR1; ?></th>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR1; ?>" data-tax="<?php echo $TAX0; ?>" value="<?php echo $_POST['letter_1_tax_0']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR1; ?>" data-tax="<?php echo $TAX1; ?>" value="<?php echo $_POST['letter_1_tax_1']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR1; ?>" data-tax="<?php echo $TAX2; ?>" value="<?php echo $_POST['letter_1_tax_2']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR1; ?>" data-tax="<?php echo $TAX3; ?>" value="<?php echo $_POST['letter_1_tax_3']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR1; ?>" data-tax="<?php echo $TAX4; ?>" value="<?php echo $_POST['letter_1_tax_4']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control" id="total_letter_1" disabled></td>
        </tr>
        <tr>
          <th name="letter_2" scope="row"><?php echo $CHAR2; ?></th>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR2; ?>" data-tax="<?php echo $TAX0; ?>" value="<?php echo $_POST['letter_2_tax_0']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR2; ?>" data-tax="<?php echo $TAX1; ?>" value="<?php echo $_POST['letter_2_tax_1']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR2; ?>" data-tax="<?php echo $TAX2; ?>" value="<?php echo $_POST['letter_2_tax_2']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR2; ?>" data-tax="<?php echo $TAX3; ?>" value="<?php echo $_POST['letter_2_tax_3']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR2; ?>" data-tax="<?php echo $TAX4; ?>" value="<?php echo $_POST['letter_2_tax_4']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control" id="total_letter_2" disabled></td>
        </tr>
        <tr>
          <th name="letter_3" scope="row"><?php echo $CHAR3; ?></th>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR3; ?>" data-tax="<?php echo $TAX0; ?>" value="<?php echo $_POST['letter_3_tax_0']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR3; ?>" data-tax="<?php echo $TAX1; ?>" value="<?php echo $_POST['letter_3_tax_1']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR3; ?>" data-tax="<?php echo $TAX2; ?>" value="<?php echo $_POST['letter_3_tax_2']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR3; ?>" data-tax="<?php echo $TAX3; ?>" value="<?php echo $_POST['letter_3_tax_3']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR3; ?>" data-tax="<?php echo $TAX4; ?>" value="<?php echo $_POST['letter_3_tax_4']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control" id="total_letter_3" disabled></td>
        </tr>
        <tr>
          <th name="letter_4" scope="row"><?php echo $CHAR4; ?></th>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR4; ?>" data-tax="<?php echo $TAX0; ?>" value="<?php echo $_POST['letter_4_tax_0']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR4; ?>" data-tax="<?php echo $TAX1; ?>" value="<?php echo $_POST['letter_4_tax_1']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR4; ?>" data-tax="<?php echo $TAX2; ?>" value="<?php echo $_POST['letter_4_tax_2']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR4; ?>" data-tax="<?php echo $TAX3; ?>" value="<?php echo $_POST['letter_4_tax_3']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control validate" data-char="<?php echo $CHAR4; ?>" data-tax="<?php echo $TAX4; ?>" value="<?php echo $_POST['letter_4_tax_4']; ?>" disabled></td>
          <td class="form-group"><input type="text" class="form-control" id="total_letter_4" disabled></td>
        </tr>
        <tr>
          <th scope="row">Tax Total</th>
          <td class="form-group"><input type="text" class="form-control" id="total_tax_0" disabled></td>
          <td class="form-group"><input type="text" class="form-control" id="total_tax_1" disabled></td>
          <td class="form-group"><input type="text" class="form-control" id="total_tax_2" disabled></td>
          <td class="form-group"><input type="text" class="form-control" id="total_tax_3" disabled></td>
          <td class="form-group"><input type="text" class="form-control" id="total_tax_4" disabled></td>
          <td class="form-group"><button type="submit" class="btn btn-block btn-primary">Submit</button></td>
        </tr>
      </tbody>
    </table>
  </form>
  <footer>
  </footer>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript">
$( '.validate' ).each( function() {
  _term = $(this).val();
  _char = $(this).data('char');
  if ( _term[0].toUpperCase() == _char ) {
    $(this).parent().addClass( 'has-success' );
  } else {
    $(this).parent().addClass( 'has-error' );
  }
});
  </script>
