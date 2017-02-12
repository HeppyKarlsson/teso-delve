<?php

namespace App;

use App\Model\Character;
use App\Model\Guild;
use App\Model\GuildMember;
use App\Model\Item;
use App\Model\UserSetFavourite;
use HeppyKarlsson\Meta\Traits\Meta;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property string lang
 */
class User extends Authenticatable
{
    use Notifiable,
        Meta;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'seen_at',
    ];

    public function items() {
        return $this->belongsToMany(Item::class, 'user_items', 'userId', 'itemId')
            ->withPivot('characterId', 'uniqueId', 'bagEnum', 'slotId', 'traitEnum', 'traitDescription', 'enchant', 'enchantDescription', 'equipTypeEnum', 'armorTypeEnum', 'weaponTypeEnum', 'isLocked', 'isBound', 'isJunk', 'count');
    }

    public function guilds() {
        return $this->hasManyThrough(Guild::class, GuildMember::class, 'user_id', 'id', 'guild_id');
    }

    public function favouriteSets() {
        return $this->hasMany(UserSetFavourite::class, 'userId');
    }

    public function characters() {
        return $this->hasMany(Character::class, 'userId');
    }

}
