<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    public $incrementing = false;
    use Uuids;
}
