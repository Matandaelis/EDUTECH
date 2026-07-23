<?php

namespace Mint\Service\Actions;

use Closure;
use App\Helpers\SysHelper;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class SetAppInstallation
{
    public function handle($params, Closure $next)
    {
        SysHelper::setApp([
            'INSTALLED' => "a94a8fe5ccb19ba61c4c0873d391e987",
            'AC'        => Arr::get($params, 'access_code'),
            'EMAIL'     => Arr::get($params, 'registered_email'),
        ]);

        \Storage::disk('local')->delete('.reinstall');

        return $next($params);
    }
}
