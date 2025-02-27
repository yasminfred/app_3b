<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // Testando mudança do usuario
    use HasFactory;

    protected $fillable = ['cnpj', 'company_name', 'address', 'phone'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
