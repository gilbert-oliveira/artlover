<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Cashier\Billable;

/**
 * @property-read int $id
 * @property-read string $name
 * @property-read string $email
 * @property-read string $stripe_id
 * @property-read Carbon $created_at
 * @property-read Carbon $updated_at
 * @property-read Carbon $deleted_at
 * @package App\Models
 */
class Customer extends Model
{
    use HasFactory;
    use Billable;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'stripe_id',
    ];
}
