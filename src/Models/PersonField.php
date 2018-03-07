<?php namespace LasseRafn\Pipedrive\Models;

use LasseRafn\Pipedrive\Utils\Model;

class PersonField extends Model
{
    public    $id;
    public    $name;
    public    $field_type;
    public    $options;
    public    $key;
    protected $entity     = 'personFields';
    protected $modelClass = self::class;
}