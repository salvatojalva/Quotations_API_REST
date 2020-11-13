<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'quotations';

    protected $primaryKey = 'id';

    protected $fillable = [
        'concessionaire_name',
        'concessionaire_phone',
        'concessionaire_address',
        'agent_full_name',
        'agent_phone',
        'client_name',
        'client_last_name',
        'client_address',
        'client_phone',
        'client_email',
        'client_age',
        'client_genre',
        'client_civil_status',
        'client_home_people',
        'client_academic_level',
        'client_is_working',
        'client_income',
        'car_model',
        'car_line',
        'car_brand'
    ];


}