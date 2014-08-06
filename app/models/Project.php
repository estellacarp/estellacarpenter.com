<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Project extends Eloquent implements UserInterface, RemindableInterface {

<<<<<<< HEAD
    protected $fillable = ['Title', 'Description','ImageBig','Lang', 'Link'];

    public static $rules = [
        'Title'       => 'required', 
        'Description' => 'required',
        'Lang'        => 'required',
        'Link'        => 'required'
    ];
=======
<<<<<<< HEAD
<<<<<<< HEAD
    protected $fillable = ['Title', 'Description','ImageBig','Lang', 'Link'];

    public static $rules = [
        'Title'       => 'required', 
        'Description' => 'required',
        'Lang'        => 'required',
        'Link'        => 'required'
    ];
=======
=======
>>>>>>> 5b9f6a94a0aa5615d2a8488026c6c3b69e35b298
	protected $fillable = ['Title', 'Description','Image','Lang', 'Link'];

	public static $rules = [
	'Title'=>'required', 
	'Description'=> 'required',
	'Lang'=> 'required',
	'Link'=> 'required'
	];
>>>>>>> origin/master
>>>>>>> ed63cff0e16691234f2102fefa056c9e6e6554b0

    public $errors;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';
/**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**  
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }

    public function isValid($data)
    {
        $validation = Validator:: make($data, static::$rules);
        if($validation->passes()) return true;

        $this->errors = $validation->messages();
            return false;
    }

}
