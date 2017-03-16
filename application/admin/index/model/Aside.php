<?php
namespace app\index\model;
use think\Model;

class Aside extends Model
{
	public function subaside()
    {
        return $this->hasMany('Subaside','supaside');
    }
}
