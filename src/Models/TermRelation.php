<?php namespace Rimantoro\Taxonomy\Models;

use Illuminate\Database\Eloquent\Model;

class TermRelation extends Model {

  protected $fillable = [
    'term_id',
    'vocabulary_id',
  ];

	protected $table = 'term_relations';

  public function relationable() {
    return $this->morphTo();
  }

	public function term() {
		return $this->belongsTo('Rimantoro\Taxonomy\Models\Term');
	}

  public function vocabulary() {
    return $this->belongsTo('Rimantoro\Taxonomy\Models\Vocabulary');
  }

}
