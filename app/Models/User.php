<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = ['name', 'email', 'password', 'role'];
    protected $hidden = ['password', 'remember_token'];
    
    // Mutator to hash password if set
    public function setPasswordAttribute($value)
    {
        if ($value) {
            $this->attributes['password'] = \Illuminate\Support\Facades\Hash::make($value);
        }
    }
}
