<?php include $this->loadModel('ui')->getEffectViewFile('default', 'common', 'header');?>
<?php js::import($jsRoot . 'fingerprint/fingerprint.js');?>
<div class='panel panel-body' id='reg'>
  <div class='row'>
    <div id='login-region'>
      <div class='panel panel-pure' id='panel-pure'>
        <div class='panel-heading'>
          <span id="heading-title"><?php echo $lang->user->register->welcome;?></span>
          <span id="heading-login" class='pull-right'>
            <?php 
            echo "<span id='heading-loginTip'>" . $lang->user->register->loginTip . " <span>";
            echo html::a(inlink('login'), $lang->user->register->login);
            ?>
          </span>
        </div>
        <form method='post' id='ajaxForm' class='form-horizontal' role='form' data-checkfingerprint='1'>
          <div class='panel-body'>
            <div class='form-group'>
              <label class='col-sm-3 control-label'><?php echo $lang->user->account;?></label>
              <div class='col-sm-9'><?php echo html::input('account', '', "class='form-control form-control' autocomplete='off' placeholder='" . $lang->user->register->lblAccount . "'");?></div>
            </div>
            <div class='form-group'>
              <label class="col-sm-3 control-label"><?php echo $lang->user->realname;?></label>
              <div class='col-sm-9'><?php echo html::input('realname', '', "class='form-control'");?></div>
            </div>
            <div class='form-group'>
              <label class="col-sm-3 control-label"><?php echo $lang->user->email;?></label>
              <div class='col-sm-9'><?php echo html::input('email', '', "class='form-control' autocomplete='off'") . '';?></div>
            </div>
            <div class='form-group'>
              <label class="col-sm-3 control-label"><?php echo $lang->user->password;?></label>
              <div class='col-sm-9'><?php echo html::password('password1', '', "class='form-control' autocomplate='off' placeholder='" . $lang->user->register->lblPassword . "'");?></div>
            </div>
            <div class='form-group'>
              <label class="col-sm-3 control-label"><?php echo $lang->user->password2;?></label>
              <div class='col-sm-9'><?php echo html::password('password2', '', "class='form-control'");?></div>
            </div>
            <div class='form-group'>
              <label class="col-sm-3 control-label"><?php echo $lang->user->company;?></label>
              <div class='col-sm-9'><?php echo html::input('company', '', "class='form-control'");?></div>
            </div>
            <div class='form-group'>
              <label class="col-sm-3 control-label"><?php echo $lang->user->phone;?></label>
              <div class='col-sm-9'><?php echo html::input('phone', '', "class='form-control'");?></div>
            </div>
            <div class='form-group'>
              <div class="col-sm-3"></div>
              <div class='col-sm-9'><?php echo html::submitButton($lang->register,'btn btn-primary btn-block') . html::hidden('referer', $referer);?></div>
            </div>
            <div class='form-group'>
              <div class="col-sm-3"></div>
              <div class='col-sm-9'><?php include TPL_ROOT . 'user/oauthlogin.html.php';?></div>
            </div>
          </div>
        </form>
      </div>    
    </div>
  </div>
</div>
<?php include $this->loadModel('ui')->getEffectViewFile('default', 'common', 'footer');?>
