<?php
namespace bountify;
use Illuminate\Database\Eloquent\Model;
class GiftNeed extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'type',
        'status',
        //'user_id',
        //'url',
    ];
    