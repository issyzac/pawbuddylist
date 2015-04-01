<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 4/1/15
 * Time: 11:41 AM
 */

Class Pet extends Eloquent{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pet';

    protected $guarded = array('$id');

    public function category()
    {
        return $this->belongsTo('Category', 'category_id', 'id');

    }

    public function appearance()
    {
        return $this->belongsTo('Appearance', 'a', 'id');
    }

}