<?php

namespace KoenHoeijmakers\LaravelFilterable\Sorters;

use Illuminate\Database\Eloquent\Builder;
use KoenHoeijmakers\LaravelFilterable\Contracts\Filters\Sorter;

class OrderBy implements Sorter
{
    /**
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @param string                                $column
     * @param                                       $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function __invoke(Builder $builder, string $column, string $type)
    {
        return $builder->orderBy($column, $type);
    }
}
