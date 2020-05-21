<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $user_id
 * @property string $recipient_name
 * @property string $recipient_phone
 * @property string $recipient_address
 * @property string $shipment_time
 * @property int $total_price
 * @property string $shipment_status
 * @property string $payment_status
 * @property string $created_at
 * @property string $updated_at
 */
class Orders extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id','order_no' ,'recipient_name', 'recipient_phone', 'recipient_address', 'shipment_time', 'total_price', 'shipment_status','shipment_price', 'payment_status', 'created_at', 'updated_at'];

    public function OrderDetails(){
        return $this->hasMany('App\OrderDeails')->orderBy('sort','desc');
    }
}
