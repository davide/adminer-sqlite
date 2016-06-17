<?php

function adminer_object() {    

    class AdminerSoftware extends Adminer {

      function loginForm() {
            ?>
        <input type="hidden" name="auth[driver]" value="sqlite">
        <input type="hidden" name="server" value="localhost">
        <table cellspacing="0">
          <tr>
            <th>
              <?php echo lang('Username'); ?>
            <td>
              <input id="username" name="auth[username]" value="<?php echo h($_GET["username"]);  ?>">
          <tr>
            <th>
              <?php echo lang('Password'); ?>
            <td>
              <input type="password" name="password">
          <tr>
            <th>
              <?php echo lang('Database'); ?>
            <td>
              <input type="text" name="auth[db]">
        </table>
        <?php
            echo "<p><input type='submit' value='" . lang('Login') . "'>\n";
            echo checkbox("permanent", 1, $_COOKIE["adminer_permanent"], lang('Permanent login')) . "\n";
        }
        
        function login($login, $password) {
          // validate user submitted credentials
          return ($login == 'admin' && $password == '');
        }

        function database() {
            return getenv('DB_PATH');
        }   
     }

     return new AdminerSoftware;
}

include "adminer-4.2.5-en.php"; // or editor-3.4.0.php what ever the version which u r using

?>