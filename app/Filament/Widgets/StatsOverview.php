<?php

namespace App\Filament\Widgets;

use App\Models\{Tour, Booking, Inquiry};
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Открытые туры', Tour::whereHas('tourGroups', fn($q) => $q->where('status', 'open'))->count())
                ->icon('heroicon-o-globe-alt')
                ->color('success'),

            Stat::make('Новые брони', Booking::where('status', 'pending')->count())
                ->icon('heroicon-o-shopping-cart')
                ->color('warning'),

            Stat::make('Новые заявки', Inquiry::whereDate('created_at', today())->count())
                ->icon('heroicon-o-chat-bubble-left-right')
                ->color('info'),
        ];
    }
}
