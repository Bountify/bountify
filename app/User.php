<?php

namespace Bountify;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}


/*

<?php
namespace Bountify;

use Gravatar;
use Cartalyst\Attributes\Attribute;
use Cartalyst\Attributes\EntityTrait;
use Cartalyst\Attributes\EntityInterface;
use Cartalyst\Sentinel\Users\EloquentUser;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cartalyst\Sentinel\Addons\Social\Models\LinkInterface;
class User extends EloquentUser implements SluggableInterface, EntityInterface
{
    use SluggableTrait, EntityTrait;
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];
    /**
     * Array of fields that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];
    /**
     * Array of login column names.
     *
     * @var array
     */
    protected $loginNames = ['email', 'username'];
    /**
     * Array of fillable columns.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'username',
        'password',
        'last_name',
        'first_name',
        'permissions',
    ];
    /**
     * How to generate the user slug.
     *
     * @var array
     */
    protected $sluggable = ['build_from' => 'username', 'save_to' => 'username'];
    /**
     * Create a new User model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        /*
         * EAV Attributes
         */
        Attribute::firstOrCreate(['slug' => 'gender']);
        Attribute::firstOrCreate(['slug' => 'mobile']);
        // call parent constructor
        parent::__construct($attributes);
    }
    public function giftneeds()
    {
        return $this->hasMany('bountify/GiftNeed');
    }
    /**
     * Returns the URL to the avatar image, default size.
     *
     * @return string The URL to the avatar
     */
    public function getAvatarAttribute()
    {
        return Gravatar::src($this->email);
    }
    /**
     * Gets the URL to a larger version of the avatar image.
     *
     * @return string The URL to the image
     */
    public function getProfilePicAttribute()
    {
        return Gravatar::src($this->email, 238);
    }
    /**
     * Gets the user's display name.
     *
     * @return string Created by concatenating the first and last names.
     */
    public function getDisplayNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }
    /**
     * Gets the slug used for generating URLs.
     *
     * @return string The same as the username.
     */
    


    public function getSlugAttribute()
    {
        return $this->username;
    }
    /**
     * Gets links to OAuth providers, e.g. Facebook.
     *
     * @return Portphilio\SentinelLink OAuth information for a 3rd party account.
     */
    public function links()
    {
        return $this->hasMany('Portphilio\SentinelLink');
    }
    /**
     * Returns the social network link associated with a particular provider
     * for this user.
     *
     * @param string $slug The name of the provider, e.g. facebook, google, etc.
     *
     * @return mixed Returns a Portphilio\SentinelLink on success, false on failure
     */
    public function getLinkByProvider($slug)
    {
        foreach ($this->links as $link) {
            if ($slug == $link->provider) {
                return $link;
            }
        }
        return false;
    }
    /**
     * Find a user that matches on nickname, first/last name, or full name.
     *
     * @param array $atts The array of search parameters
     *
     * @return mixed Returns User object on success, false on failure
     */
    public static function findMatch($atts)
    {
        // convert the $atts into individual variables
        extract($atts);
        // try to match on the various properties
        if (isset($nickname)) {
            if ($user = self::where('username', $nickname)->first()) {
                if (!empty($user)) {
                    return $user;
                }
            }
        }
        if (isset($firstName, $lastName)) {
            if ($user = self::where('first_name', $firstName)->where('last_name', $lastName)->first()) {
                if (!empty($user)) {
                    return $user;
                }
            }
        }
        if (isset($name)) {
            $users = self::all();
            foreach ($users as $u) {
                similar_text($u->display_name, $name, $pct);
                if ($pct >= 0.85) {
                    return $u;
                }
            }
        }
        return false;
    }


/*

    public function setSocialUrl(LinkInterface $link, $data)
    {
        if (empty($link->url)) {
            switch ($link->provider) {
                case 'facebook': $link->url = $data->urls['Facebook']; break;
                case 'google': $link->url = 'https://plus.google.com/'.$data->uid; break;
                case 'github': $link->url = 'https://github.com/'.$data->uid; break;
                case 'linkedin':
                case 'microsoft': $link->url = $data->urls; break;
                case 'twitter':
                case 'instagram': $link->url = 'https://'.$link->provider.'.com/'.$data->nickname; break;
            }
            $link->save();
        }
    }
    public function setSocialUsername(LinkInterface $link, $data)
    {
        if (empty($link->username) && !empty($data->nickname)) {
            $link->username = $data->nickname;
            $link->save();
        }
    }

*/

}

*/
