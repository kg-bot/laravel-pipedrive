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


    public function deals()
    {

        $productDeal = new ProductDeal( $this->request );

        $newEntity = $productDeal->getEntity();
        $newEntity = str_replace( ':productid', $this->id, $newEntity );

        $productDeal->updateEntity( $newEntity );

        return $productDeal;
    }
}