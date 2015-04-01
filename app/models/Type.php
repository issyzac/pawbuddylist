<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 4/1/15
 * Time: 12:35 PM
 */

Class Type extends Eloquent{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pet_type';

    protected $guarded = array('$id');

    public function category()
    {
        return $this->hasMany('Category', 'type_id', 'id');

    }

}