<?php

namespace Charis\Models;

/**
 * Class Target
 * @package Charis\Models
 *
 * @method getId($id)
 * @method getName()
 * @method setName($name)
 */
class Target extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'targets';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Table parameters
     */
    const TABLE_NAME = 'targets';
    const ID = 'id';
    const NAME = 'name';

    /**
     * Default targets
     */
    const ADULTS = 10;
    const COMMUNITY = 20;
    const CHILDREN = 30;
    const ENVIRONMENT = 40;
    const ELDERLY = 50;
    const TEENAGER = 60;
    const SPECIAL_CONDITIONS = 70;
    const GENERAL = 80;

    /**
     * @return Organization
     */
    public function organizations(){
        return $this->belongsToMany(Organization::class)->using(OrganizationActivity::class);
    }


}
