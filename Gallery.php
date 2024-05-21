<?php namespace Ozzigeno\CMS\Plugins;

use Model;

/**
 * Gallery Model
 *
 * Customize Model from Ozzigeno
 */
class Gallery extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'ozzigeno_cms_galleries';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    /**
     * @var bool timestamps disabled by default
     */
    public $timestamps = false;
}
