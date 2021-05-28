<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonorModel extends Model
{

    protected $table = "donors";

    protected $fillable = [
        'username','email','phone', 'address', 'governor','contact_type','type',
        'contact_time'
    ];

    public function run()
    {
        DonorModel::factory()
            ->count(50)
            ->hasPosts(1)
            ->create();
    }
}
