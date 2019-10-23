<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Role;

use Orchid\Platform\Models\Role;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\TD;
use Orchid\Screen\Layouts\Table;

class RoleListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'roles';

    /**
     * @return array
     */
    public function columns() : array
    {
        return [
            TD::set('name', __('Name'))
                ->sort()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Role $role){
                    return Link::make($role->name)
                        ->route('platform.systems.roles.edit', $role->slug);
                }),

            TD::set('slug', __('Slug'))
                ->sort()
                ->filter(TD::FILTER_TEXT),

            TD::set('created_at', __('Created'))
                ->sort(),
        ];
    }
}
