<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataIklan extends Model
{
    use HasFactory;
    protected $table = "data_iklan";
    protected $fillable = ["daftar_ads", "reach", "amount_spent", "cpm", "ctrl_all", "cost_per_outbound_click", "outbound_click", "messaging_conversation"];
}
