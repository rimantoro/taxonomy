<?php namespace Rimantoro\Taxonomy\Models;

use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model {

  protected $fillable = [
    'name',
  ];

  protected $table = 'vocabularies';

  public $rules = [
    'name' => 'required'
  ];

  public function terms() {
    return $this->HasMany('Rimantoro\Taxonomy\Models\Term');
  }

  public function relations() {
    return $this->HasMany('Rimantoro\Taxonomy\Models\TermRelation');
  }

}
