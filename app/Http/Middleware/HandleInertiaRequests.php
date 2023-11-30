<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use App\Models\ListProgram;
use App\Models\ListDropdown;
use App\Models\ListAgency;
use App\Models\ListStatus;
use App\Models\ListExpense;
use App\Models\ListPrivilege;
use App\Models\LocationRegion;
use Illuminate\Http\Request;
use Inertia\Middleware;
use App\Http\Resources\Staff\IndexResource as StaffResource;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request): array
    {
        $settings = Setting::with('agency.region','semester','trimester','quarter')->first();
        
        return array_merge(parent::share($request), [
            'auth' => (\Auth::check()) ? new StaffResource(\Auth::user()) : '',
            'flash' => [
                'message' => session('message'),
                'data' => session('data'),
                'icon' => session('icon'),
                'color' => session('color')
            ],
            'regions' => LocationRegion::all(),
            'dropdowns' => ListDropdown::all(),
            'programs' => ListProgram::all(),
            'statuses' => ListStatus::all(),
            'privileges' => ListPrivilege::all(),
            'agencies' => ListAgency::all(),
            'settings' => ($settings) ? new SettingResource($settings) : null
        ]);
    }
}
