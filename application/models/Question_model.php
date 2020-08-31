<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Question_model extends BaseModel {


    protected $table = "questions";

    protected $primaryKey = 'id';

    protected $timestamps = true;

    // Record status for checking is deleted or not
    const SOFT_DELETED = 'is_deleted';

    public static function factory($attr = array()) {
        return new Question_model($attr);
    }

    public function quiz() {
        return $this->hasOne(Quiz_model::class, 'id', 'quiz_id');
    }
}