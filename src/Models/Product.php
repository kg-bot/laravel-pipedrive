<?php namespace LasseRafn\Pipedrive\Models;

use LasseRafn\Pipedrive\Utils\Model;

class Product extends Model
{
	protected $entity   = 'products';

	protected $modelClass = self::class;

	public $id;
	public $name;
	public $code;
	public $unit;
	public $tax;
	public $active_flag;
	public $owner_id;
	public $visible_to;
	public $add_time;

	/** @var array */
	public $prices;

    public function getDeals( $fields = null, $start = 0, $limit = 100 )
    {
        $deals = $this->request->get( "{$this->entity}/{$this->id}/deals", null, $fields, $start, $limit );

        if ( !$deals ) {
            return [];
        }

        return array_map( function ( $deal ) {
            return new Deal( $this->request, $deal );
        }, $deals );
    }
}