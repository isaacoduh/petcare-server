<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['status', 'total_price', 'created_by', 'updated_by'];

    public function isPaid()
    {
        return $this->status === OrderStatus::Paid->value;
    }

    public function payment(){}

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public static function deleteUnpaidOrders($hours)
    {
        return Order::query()->where('status', OrderStatus::Unpaid->value)
            ->where('created_at', '<', Carbon::now()->subHours($hours))
            ->delete();
    }
}
