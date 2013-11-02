<?php

class Post extends Eloquent
{
	public function createRules()
	{ 
		return array('title' => 'required|unique:posts');
	}

	public function updateRules()
	{
		return array('title' => 'required|unique:posts,title,'.$this->id);
	}

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }

    public function categories()
    {
        return $this->belongsToMany('Category');
    }

    public function comments()
    {
        return $this->hasMany('Comment');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    public function getDateAttribute()
    {
        $date = \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
        return $date;
    }

    public function getNextAttribute()
    {
        $id = self::published()->where('id', '>', $this->id)->min('id');
        return $id;
    }

}