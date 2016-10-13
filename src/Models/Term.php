<?php namespace Rimantoro\Taxonomy\Models;

use Illuminate\Database\Eloquent\Model;

class Term extends Model {

  protected $fillable = [
    'name',
    'vocabulary_id',
    'parent',
    'weight',
  ];

	public static $rules = [
		'name' => 'required'
  ];

  public function termRelation() {
    return $this->morphMany('Rimantoro\Taxonomy\Models\TermRelation', 'relationable');
  }

	public function vocabulary() {
		return $this->belongsTo('Rimantoro\Taxonomy\Models\Vocabulary');
	}

  public function childrens() {
    return $this->hasMany('Rimantoro\Taxonomy\Models\Term', 'parent', 'id')
      ->orderBy('weight', 'ASC');
  }

  public function parentTerm() {
    return $this->hasOne('Rimantoro\Taxonomy\Models\Term', 'id', 'parent');
  }
}
