<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 4/1/15
 * Time: 12:06 PM
 */

Class Category extends Eloquent{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pet_category';

    protected $guarded = array('$id');

    public function type()
    {
        return $this->belongsTo('Type', 'type_id', 'id');

    }

    public function pet()
    {
        return $this->hasMany('Pet', 'category_id', 'id');
    }

}