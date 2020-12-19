<!doctype html>
<html lang="ja">
  <head>
<?php // <head> part ?>
<?php include 'common/head.php';?>
    <title>ip - #53</title>

  </head>

  <body>
    <!-- nav bar -->
    <?php include 'common/navbar.php';?>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">your ip address</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <?php echo $_SERVER["HTTP_X_FORWARDED_FOR"] ; ?>
          </td>
        </tr>
      </tbody> 
    </table>

    <?php include 'js/common_js.php';?>
  </body>
</html>
