<?php

namespace App;

use App\Model\Character;
use App\Model\Item;
use App\Model\UserSetFavourite;
use HeppyKarlsson\Meta\Traits\Meta;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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

    public function items() {
        return $this->belongsToMany(Item::class, 'user_items', 'userId', 'itemId')
            ->withPivot('characterId', 'uniqueId', 'bagEnum', 'slotId', 'traitEnum', 'traitDescription', 'enchant', 'enchantDescription', 'equipTypeEnum', 'armorTypeEnum', 'weaponTypeEnum', 'isLocked', 'isBound', 'isJunk', 'count');
    }

    public function favouriteSets() {
        return $this->hasMany(UserSetFavourite::class, 'userId');
    }

    public function characters() {
        return $this->hasMany(Character::class, 'userId');
    }

}
