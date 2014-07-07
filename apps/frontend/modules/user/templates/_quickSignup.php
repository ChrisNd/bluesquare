<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        Join Us
      </div>
      <div class="clearfix"></div>

      <div class="modal-body">
        <?= form_tag('@homepage', array('role'=>'form')); ?>
          <div class="form-group col-lg-8">
            <label for="inputEmail" class="control-label"><abbr title="Your e-mail address">Email</abbr>:</label>
            <?= input_tag('inputEmail', $sf_params->get('inputEmail'), array(
              'id'=>'inputEmail', 'class'=>'form-control', 'maxlength'=>40, 'size'=>30, 'placeholder'=>'Enter email'
            )); ?>
          </div>
          <div class="form-group col-lg-8">
            <label for="inputPassword" class="control-label"><abbr title="Choose your password">Password</abbr>:</label>
            <?= input_tag('inputPassword', $sf_params->get('inputPassword'), array(
              'id'=>'inputPassword', 'type'=>'password', 'class'=>'form-control', 'maxlength'=>25, 'size'=>30, 'placeholder'=>'Choose password'
            )); ?>
          </div>
          <div class="form-group col-lg-8">
            <button type="submit" class="btn btn-success">Join Us</button><br>
          </div>
          <div class="form-group col-lg-8 small">
            Already a member? <?= link_to('Login with your account', '@login'); ?>
          </div>
        </form>
      </div>
      <div class="clearfix"></div>

      <div class="modal-footer">
        <p class="pull-left text-muted"><small>We're committed to protecting your privacy and will not rent or sell your e-mail address.</small></p>
      </div>

    </div>
  </div>
</div>
