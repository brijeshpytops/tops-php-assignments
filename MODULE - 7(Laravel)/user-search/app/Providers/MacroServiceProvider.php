<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;

class MacroServiceProvider extends ServiceProvider

{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Builder::macro('search', function ($fields, $value) {
            if (!is_array($fields)) {
                $fields = [$fields];
            }

            $this->where(function ($query) use ($fields, $value) {
                foreach ($fields as $field) {
                    $query->orWhere($field, 'LIKE', '%' . $value . '%');
                }
            });

            return $this;
        });
    }
}
