<?php

$prefix = config('taxonomy.config.route_prefix');

Route::group(array('prefix' => $prefix), function() use ($prefix) {

  Route::resource('taxonomy', 'Rimantoro\Taxonomy\Controllers\TaxonomyController');

  Route::post('taxonomy/{id}/order', array(
    'as' => $prefix .'.taxonomy.order.terms',
    'uses' => 'Rimantoro\Taxonomy\Controllers\TaxonomyController@orderTerms',
  ));

  Route::resource('terms', 'Rimantoro\Taxonomy\Controllers\TermsController');

});
