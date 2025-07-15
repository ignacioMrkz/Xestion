<?php

namespace App;

use App\Notifications\CoordinadorResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Coordinador extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CoordinadorResetPassword($token));
    }

    public function avaliacionmonitors()
    {
        return $this->hasMany('App\Models\Avaliacionmonitor');
    }

    public function avaliacionsatisfacions()
    {
        return $this->hasMany('App\Models\Avaliacionsatisfacion');
    }

    public function pendienteRevisar()
    {
        $avaliacions = $this->avaliacionmonitors->where('revisada', 0);
        if ($avaliacions->count() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
