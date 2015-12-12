<?php
namespace bountify;
use Cartalyst\Sentinel\Addons\Social\Models\Link;
class SentinelLink extends Link
{
    /**
     * The users model name.
     *
     * @var string
     */
    protected static $usersModel = 'bountify\User';
    public function getColorAttribute()
    {
        switch ($this->provider) {
            case 'facebook': return 'blue';
            case 'twitter': return 'light-blue';
            case 'google': return 'red';
            case 'github': return 'dark';
            case 'linkedin': return 'blue';
            case 'instagram': return 'pink';
            case 'microsoft': return 'orange';
        }
    }
}