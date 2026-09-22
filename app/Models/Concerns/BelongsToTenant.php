<?php

namespace App\Models\Concerns;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Builder;

trait BelongsToTenant
{
    /**
    * O Laravel chama esse metodo sozinho quando um model usa essa trait,
    * porque o nome bate com o padrão "boot" + nome da trait.
    * Aqui a gente registra o filtro automático por restaurante e o
    * preenchimento automático do restaurant_id ao criar um registro.
    */
    protected static function bootBelongsToTenant(): void
    {
        static::addGlobalScope('tenant', function (Builder $query) {
            if (app()->bound(Restaurant::class)) {
                $query->where('restaurant_id', app(Restaurant::class)->id);
            }
        });

        static::creating(function ($model) {
            if (app()->bound(Restaurant::class)) {
                $model->restaurant_id = app(Restaurant::class)->id;
            }
        });
    }
}
