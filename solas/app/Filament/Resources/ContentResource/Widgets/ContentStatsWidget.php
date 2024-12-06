<?php

// app/Filament/Resources/ContentResource/Widgets/ContentStatsWidget.php

namespace App\Filament\Resources\ContentResource\Widgets;

use App\Models\Content;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ContentStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Draft Content', Content::where('status', 'draft')->count())
                ->description('Number of draft contents')
                ->icon('heroicon-o-pencil')
                ->color('warning')
                ->chart([30, 40, 25, 50, 70]),  // Example data

            Stat::make('Published Content', Content::where('status', 'published')->count())
                ->description('Number of published contents')
                ->icon('heroicon-o-check-circle')
                ->color('success')
                ->chart([10, 60, 80, 40, 100]),  // Example data

            Stat::make('Archived Content', Content::where('status', 'archived')->count())
                ->description('Number of archived contents')
                ->icon('heroicon-o-archive-box-arrow-down')
                ->color('primary')
                ->chart([5, 10, 15, 8, 12]),  // Example data
        ];
    }
}
