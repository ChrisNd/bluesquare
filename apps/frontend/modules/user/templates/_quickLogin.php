<?= form_tag('@homepage', array('role'=>'form', 'class'=>'navbar-form navbar-right')); ?>
  <div class="form-group input-group-sm">
    <?= input_tag('inputEmail', $sf_params->get('inputEmail'), array(
      'id'=>'inputEmail', 'class'=>'form-control', 'maxlength'=>40, 'size'=>25, 'placeholder'=>'Email Adress'
    )); ?>
  </div>
  <div class="form-group input-group-sm">
    <?= input_tag('inputPassword', $sf_params->get('inputPassword'), array(
      'id'=>'inputPassword', 'type'=>'password', 'class'=>'form-control', 'maxlength'=>25, 'size'=>20, 'placeholder'=>'Password'
    )); ?>
  </div>
  <button type="submit" class="btn btn-success btn-sm">Log in</button>
</form>