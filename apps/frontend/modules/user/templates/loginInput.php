<? use_helper('Validation'); ?>

<div class="container" role="main">
  <div class="col-sm-offset-2 col-sm-8">

  	<br><br><br>

    <h2 class="text-primary">Login to Bluesquare</h2>
    <p class="text-muted">Sign in with your account to have full access to the features we provide.</p>
    <hr>

    <? if(isset($errorMessage)): ?>
      <?= $errorMessage; ?>
    <? endif; ?>

    <?= form_tag('@login', array('role'=>'form', 'class'=>'form-horizontal')); ?>
      <div class="form-group">
        <label for="inputEmail" class="col-sm-3 control-label"><abbr title="Your e-mail address">Email</abbr>:</label>
        <div class="col-sm-6">
          <? if($sf_request->hasError('inputEmail')): ?>
            <?= form_error('inputEmail'); ?>
          <? endif; ?>
          <?= input_tag('inputEmail', $sf_params->get('inputEmail'), array(
            'id'=>'inputEmail', 'class'=>'form-control', 'maxlength'=>40, 'size'=>30, 'placeholder'=>'Enter email'
          )); ?>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-sm-3 control-label"><abbr title="Enter your password">Password</abbr>:</label>
        <div class="col-sm-6">
          <? if($sf_request->hasError('inputPassword')): ?>
            <?= form_error('inputPassword'); ?>
          <? endif; ?>
          <?= input_tag('inputPassword', $sf_params->get('inputPassword'), array(
            'id'=>'inputPassword', 'type'=>'password', 'class'=>'form-control', 'maxlength'=>25, 'size'=>30, 'placeholder'=>'Enter password'
          )); ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Sign in</button>
          or <?= link_to('Sign up now for FREE!', '@signup'); ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9 small">
          <?= link_to('Forgot your password?', '@requestPassword'); ?>
        </div>
      </div>
    </form>

  </div>
</div>
<br><br><br>
