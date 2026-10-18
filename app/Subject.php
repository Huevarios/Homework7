<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Subject extends Model {
    protected $fillable = ['name', 'description'];
    public function activities() { return $this->hasMany(GradeActivity::class)->orderBy('date', 'desc')->orderBy('id', 'desc'); }
}
