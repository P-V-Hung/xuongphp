<?php

namespace App\Models;
use \Illuminate\Database\Eloquent\Model;

class SubjectModel extends Model
{
    public $timestamps = false;

    protected $table = 'mon_hoc';

    protected $fillable = ['ten_mon_hocc','trang_thai'];

    public function getAll(){
        return parent::all()->whereIn('id',[17,18,19,20]);
    }

    public function remote($id){
        parent::destroy($id);
    }

    public function getSubject($id){
        return parent::find($id);
    }
}