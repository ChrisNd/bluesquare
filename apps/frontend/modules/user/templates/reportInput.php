<? use_helper('Validation'); ?>

<div class="container" role="main">
  <div class="col-sm-offset-2 col-sm-8">

  	<br><br><br>

    <h2 class="text-primary">Report a bug to Bluesquare</h2>
    <p class="text-muted">Report a problem on our website.</p>
    <hr>

    <? if(isset($errorMessage)): ?>
      <?= $errorMessage; ?>
    <? endif; ?>

    <?= form_tag('@report', array('role'=>'form', 'class'=>'form-horizontal')); ?>
      <div class="form-group">
        <label for="inputTitle" class="col-sm-3 control-label"><abbr title="Your e-mail address">Title</abbr>:</label>
        <div class="col-sm-6">
          <? if($sf_request->hasError('inputTitle')): ?>
            <?= form_error('inputTitle'); ?>
          <? endif; ?>
          <?= input_tag('inputTitle', $sf_params->get('inputTitle'), array(
            'id'=>'inputTitle', 'class'=>'form-control', 'maxlength'=>40, 'size'=>30, 'placeholder'=>'Enter title'
          )); ?>
        </div>
      </div>

      <div class="form-group">
			  <label for="users" class="col-sm-3 control-label">Assign to:</label>
			  <div class="col-sm-4">
			    <div id="region_options">
			    	<? $options = array('Chris', 'Stephan', '...'); ?>
			      <?= select_tag('users', options_for_select($options), array(
			        'id'=>'users', 'class'=>'form-control'
			      )); ?>
			    </div>
			    <div id="loading_ajax_indicator" class="indicator" style="display:none;"></div>
			  </div>
			</div>

      <div class="form-group">
        <label for="description" class="col-sm-3 control-label">Description:</label>
        <div class="col-sm-6">
          <? if($sf_request->hasError('description')): ?>
            <?= form_error('description'); ?>
          <? endif; ?>
          <?= textarea_tag('description', $sf_params->get('description'), array(
            'id'=>'description', 'class'=>'form-control counted', 'rows'=>'8', 'placeholder'=>'Tell us a little bit about the issue...'
          )); ?>
          <span class="pull-right help-block small" id="counter">4000 characters remaining</span>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Submit issue</button>
        </div>
      </div>
    </form>

  </div>
</div>
<br><br><br>
