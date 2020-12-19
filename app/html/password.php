<!doctype html>
<html lang="ja">
  <?php // <head> part ?>
  <?php include 'common/head.php';?>
  <body>
    <!-- nav bar -->
    <?php include 'common/navbar.php';?>

    <script>
        function copyTextToClipboard(ps_id) {
            var str = document.getElementById(ps_id).innerHTML;
            console.log(str);

            const el = document.createElement('textarea');
            el.value = str;
            el.setAttribute('readonly', '');
            el.style.position = 'absolute';
            el.style.left = '-9999px';
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);
        }
    </script>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Passwords</th>
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
            <button onclick="copyTextToClipboard('password_<?= $k ?>')">Copy</button>
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