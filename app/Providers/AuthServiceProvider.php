<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Table;
use App\Models\User;
use Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Arr;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('can-check-tables', function (User $user, int $userId) {
            return $user->id === $userId;
        });

        Gate::define('can-check-table', function (User $user, int $tableId) {
            return array_search($tableId, $user->tables->pluck('id')->toArray()) === false ? false : true;
        });
    }
}
