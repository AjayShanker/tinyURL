<?php
    session_start();
    require_once("./config.php");
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="author" content="Ajay Shanker">
    <title><?php echo SITE_NAME; ?></title>
    <link rel="icon" href="https://www.nopcommerce.com/icons/icons_0/favicon.ico" sizes="32x32" />	    
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css" rel="stylesheet"/>
</head>
<body>
<br>
<center>
    <h1><?php echo SITE_NAME; ?></h1>
    <?php
    if (isset($_SESSION['success'])) {
        echo "<p class='success'>" . $_SESSION['success'] . "</p>";
        unset($_SESSION['success']);
    }
    if (isset($_SESSION['error'])) {
        echo "<p class='alert'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    if (isset($_GET['error']) && $_GET['error'] == 'db') {
        echo "<p class='alert'>Error in connecting to database!</p>";
    }
    if (isset($_GET['error']) && $_GET['error'] == 'inurl') {
        echo "<p class='alert'>Not a valid URL!</p>";
    }
    if (isset($_GET['error']) && $_GET['error'] == 'dnp') {
        echo "<p class='alert'>Ok! So I got to know you love playing! But don't play here!!!</p>";
    }
    ?>
    <form method="POST" action="functions/shorten.php">
        <div class="section group">
            <div class="col span_3_of_3">
                <input type="url" id="input" name="url" class="input" placeholder="Enter a URL here">
            </div>
            <div class="col span_1_of_3">
                <input type="text" id="custom" name="custom" class="input_custom" placeholder="Enable custom text"
                       disabled>
            </div>
            <div class="col span_2_of_3">
                <div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch"
                           onclick="toggle()">
                    <label class="onoffswitch-label" for="myonoffswitch"></label>
                </div>
            </div>
        </div>
        <input type="submit" value="Go" class="submit">
    </form>



    <p>&nbsp;</p><p>&nbsp;</p>
    <div class="section group">
        <center><h1>Tiny URL</h1></center><p>&nbsp;</p>
        <table id="example" class="display responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>URL</th>
                    <th>Created On</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($_SESSION['tiny_url_list'] as $result){ ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo '<a href="' . BASE_URL .  $result['code'] . '" target="_blank">' . BASE_URL . $result['code'] . '</a>'; ?></td>    
                        <td><?php echo $result['created']; ?></td>                    
                    </tr> 
                    <?php ++$i; ?>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>	
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>	
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>	


    <script>
      function toggle () {
        if (document.getElementById('myonoffswitch').checked) {
          document.getElementById('custom').placeholder = 'Enter your custom text'
          document.getElementById('custom').disabled = false
          document.getElementById('custom').focus()
        }
        else {
          document.getElementById('custom').value = ''
          document.getElementById('custom').placeholder = 'Enable custom text'
          document.getElementById('custom').disabled = true
          document.getElementById('custom').blur()
          document.getElementById('input').focus()
        }
      }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>
</html>
