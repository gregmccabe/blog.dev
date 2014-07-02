<?php

class Post extends BaseModel {

    // the db table this modle relates to
    protected $table = 'posts';
    // validation rules for our modle properties
    static public $rules = [
        'title' => 'required|max:100',
        'body' => 'required|max:100'
    ];

}
