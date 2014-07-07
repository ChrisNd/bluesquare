<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <? include_metas(); ?>
    <? include_title(); ?>
    <link rel="shortcut icon" href="/favicon.ico" />
  </head>

  <body role="document">
    <? include_partial('global/header'); ?>
    <?= $sf_data->getRaw('sf_content'); ?>
    <? include_partial('global/footer'); ?>
  </body>

</html>
