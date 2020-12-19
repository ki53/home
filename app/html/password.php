<!doctype html>
<html lang="ja">
  <head>
<?php // <head> part ?>
<?php include 'common/head.php';?>
    <title>password - #53</title>

  </head>
  <body>
    <!-- nav bar -->
<?php include 'common/navbar.php';?>

    <!-- main -->
    <script src="js/password.js"></script>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $i = 10;
          $pass = makePasswords($i); 
        ?>
<?php for ($k=0; $k<$i; $k++) { ?>
        <tr>
          <td><?= ($k + 1) ?></td>
          <td>
            <div id="password_<?= $k ?>" value="<?php echo $pass[$k] ; ?>"><?php echo $pass[$k] ; ?></div>
          </td>
          <td>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16" onclick="copyTextToClipboard('password_<?= $k ?>')">
              <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
              <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
            </svg>
          </td>
        </tr>        
<?php } ?>
      </tbody> 
    </table>

    <?php include 'js/common_js.php';?>
    <?php // include 'js/password.js'; ?>
  </body>
</html>
<?php 
  function makePasswords($i = 10)
  {
    $passwords = array();
    for ($j=0; $j<$i; $j++) {
      array_push($passwords, random());
    }
    return $passwords;
  }

  function random($length = 20)
  {
    return substr(base_convert(hash('sha256', uniqid()), 16, 36), 0, $length);
  }
?>