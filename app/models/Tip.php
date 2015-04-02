<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 4/2/15
 * Time: 9:33 AM
 */

Class Tip extends Eloquent{

    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'pet_tip';

    protected $guarded = array('$id');

    public function type(){
        return $this->belongsTo('Type', 'pet_type_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('Category', 'pet_category_id', 'id');

    }

}