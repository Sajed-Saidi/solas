<?php

// app/Filament/Resources/UserResource/Widgets/UsersStatsWidget.php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UsersStatsWidget extends BaseWidget
{
    // protected int | string | array $columnSpan = 2;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count())
                ->description('The total number of users in the system')
                ->icon('heroicon-o-users')
                ->color('primary')
                ->chart([6, 12, 9, 2, 18, 45]),

            Stat::make('Admin Users', User::where('role', 'admin')->count())
                ->description('Number of admin users')
                ->icon('heroicon-o-user-group')
                ->color('success')
                ->chart([1, 3, 9, 2, 18, 45]),

            Stat::make('Normal Users', User::where('role', 'user')->count())
                ->description('Number of normal users')
                ->icon('heroicon-o-user')
                ->color('danger')
                ->chart([1, 3, 9, 2, 18, 45]),
        ];
    }
}
