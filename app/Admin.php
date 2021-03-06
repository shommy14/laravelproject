<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
        use Notifiable;

        protected $guard = 'admin';
        protected $fillable = [
            'name', 'email', 'password',
        ];
        protected $hidden = [
            'password', 'remember_token',
        ];

    /**
     * Route notifications for the Slack channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForSlack($notification)
        {
        return 'https://hooks.slack.com/services/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';
    }
}
