<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class GradeActivity extends Model {
    protected $fillable = ['subject_id', 'title', 'type', 'grade', 'date', 'notes'];
    public function subject() { return $this->belongsTo(Subject::class); }
}
