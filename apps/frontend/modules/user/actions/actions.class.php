<?php

/**
 * user actions.
 *
 * @package    bluesquare
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class userActions extends sfActions
{
  public function executeLogin()
  {
  	return sfView::INPUT;
  }

  public function executeReport()
  {
  	return sfView::INPUT;
  }
}
