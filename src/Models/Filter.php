<?php namespace LasseRafn\Pipedrive\Models;

use LasseRafn\Pipedrive\Utils\Model;

class Filter extends Model
{
	public    $id;
	public    $name;
	public    $conditions;
	public    $ids;
	protected $entity     = 'filters';
	protected $modelClass = self::class;
}