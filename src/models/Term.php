<?php namespace Devfactory\Taxonomy;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Term extends Eloquent {

	public static $rules = [
		'name' => 'required'
  ];

  public function termRelation() {
    return $this->morphMany('TermRelation', 'relationable');
  }

	public function vocabulary() {
		return $this->belongsTo('Devfactory\Taxonomy\Vocabulary');
	}

}
