<!doctype html>
<html lang="ja">
  <?php // <head> part ?>
  <?php include 'common/head.php';?>
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
            <?php echo $_SERVER["REMOTE_ADDR"] ; ?>
          </td>
        </tr>
      </tbody> 
    </table>

    <?php include 'js/common_js.php';?>
  </body>
</html>
