<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 4/1/15
 * Time: 12:32 PM
 */

Class Appearance extends Eloquent{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pet_appearance';

    protected $guarded = array('$id');

    public function pet()
    {
        return $this->hasMany('Pet', 'appearance_id', 'id');

    }

}