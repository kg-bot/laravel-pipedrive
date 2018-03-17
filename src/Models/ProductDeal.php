<?php namespace LasseRafn\Pipedrive\Models;

use LasseRafn\Pipedrive\Utils\Model;

class ProductDeal extends Model
{
    // todo fix ->find(X) not working (unknown method) I think it needs to be ?id=X instead of adding /id to url
    public    $id;
    public    $add_time;
    public    $won_time;
    public    $status;
    protected $entity     = 'products/:productid/deals';
    protected $modelClass = self::class;

}