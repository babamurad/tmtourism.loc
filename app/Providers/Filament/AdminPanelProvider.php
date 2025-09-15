<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationItem;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use App\Filament\Widgets\{StatsOverview, UpcomingTourGroups};
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Navigation\NavigationGroup;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->brandName('TMTOURISM.COM')
            ->registration()
//            ->passwordReset()
            ->navigationGroups([
                NavigationGroup::make()
                    ->label('Туры и услуги')
                    ->icon('heroicon-o-globe-alt')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('Продажи и клиенты')
                    ->icon('heroicon-o-currency-dollar')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('Контент и маркетинг')
                    ->icon('heroicon-o-newspaper')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('Система')
                    ->icon('heroicon-o-cog-6-tooth')
                    ->collapsed(),
            ])
            ->sidebarCollapsibleOnDesktop()
            ->colors([
                'primary' => Color::Amber,
            ])
            //->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                StatsOverview::class,
                UpcomingTourGroups::class,

                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->resources([
                \App\Filament\Resources\TourCategories\TourCategoryResource::class,
                \App\Filament\Resources\Tours\TourResource::class,
                \App\Filament\Resources\TourGroups\TourGroupResource::class,
                \App\Filament\Resources\Services\ServiceResource::class,

                \App\Filament\Resources\Bookings\BookingResource::class,
                \App\Filament\Resources\Customers\CustomerResource::class,
                \App\Filament\Resources\Payments\PaymentResource::class,
                \App\Filament\Resources\Inquiries\InquiryResource::class,

                \App\Filament\Resources\Posts\PostResource::class,
                \App\Filament\Resources\Categories\CategoryResource::class,
                \App\Filament\Resources\Reviews\ReviewResource::class,

                \App\Filament\Resources\Users\UserResource::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
