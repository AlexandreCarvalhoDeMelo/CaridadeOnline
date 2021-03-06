<?php

namespace Charis\Models;

/**
 * Class Social
 * @package Charis\Models
 */
class Social extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'social_logins';

    /**
     * fields
     */
    const ID = 'id';
    const USER_ID = 'user_id';
    const PROVIDER = 'provider';
    const SOCIAL_ID = 'social_id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
