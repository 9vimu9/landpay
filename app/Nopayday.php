<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nopayday extends Model
{
    const MARKED_AS_NOPAY='1';
    const PENDING='0';
}
