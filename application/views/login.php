<div id="login-form">
  <h1>System Login</h1>
  
  <div class="divider"></div>
  
  <?php if ($error) { echo '<div class="error">Sorry your credentials were not found in the database.</div><div class="divider"></div>'; } ?>

  <?php echo form_open('login/login_user') ?>

    <input type="text" id="email" name="email" value="" autocomplete="off" placeholder="Username" /><br /><br />

    <input type="password" id="password" name="password" value="" autocomplete="off" placeholder="Password" /><br /><br />

    <div class="divider"></div>
    
    <input type="submit" name="submit" class="" value="Login" />

  </form>
</div>