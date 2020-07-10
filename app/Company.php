<?php

namespace App;

use App\Nova\User;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Http\Requests\NovaRequest;

class Company extends Model
{
    /**
     * Return the location to redirect the user after deleton.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @param  \Laravel\Nova\Resource  $resource
     * @return string
     */
    public static function redirectAfterDelete(NovaRequest $request)
    {
        return 'https://google.com';
    }
}
