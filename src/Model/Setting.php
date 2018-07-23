<?php
/**
 * Created by PhpStorm.
 * User: jlabs
 * Date: 20/07/18
 * Time: 20.00
 */

namespace Laravolt\Envi\Model;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'setting';
    protected $fillable = ['key','value'];
}
