<?php

class Post extends BaseModel {

    // the db table this modle relates to
    protected $table = 'posts';

    protected $imgDir = 'img_upload';
    // validation rules for our modle properties
    static public $rules = [
        'title' => 'required|max:100',
        'body' => 'required'
    ];

    public function user()
{
    return $this->belongsTo('User');
}
    public function addUploadedImage($image) {
        $systemPath = public_path() . '/' . $this->imgDir . '/';

        $imageName = $this->id . '-' . $image->getClientOriginalName();

        $image->move($systemPath, $imageName);

        $this->img_path = '/' . $this->imgDir . '/' . $imageName;
    }

    public function renderBody($summary = false)
    {
        $body = $this->body;

        if ($summary) {
            $body = str_limit($this->body, 100);
        }

        $dirty_html = Parsedown::instance()->parse($body);
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $clean_html = $purifier->purify($dirty_html);

        return $clean_html;

    }

    public function setSlugAttribute($value)
    {
        $value = str_replace(' ', '-', trim($this->title));
        $this->attributes['slug'] = strtolower($value);
    }
}
