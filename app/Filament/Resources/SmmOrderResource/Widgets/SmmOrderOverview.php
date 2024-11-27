<?php

namespace App\Filament\Resources\SmmOrderResource\Widgets;

use App\Models\SmmOrder;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SmmOrderOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Retrieve order statistics
        $totalOrders = SmmOrder::count();
        $unpaidOrders = SmmOrder::where('payment_status', 'pending')->count();
        $paidOrders = SmmOrder::where('payment_status', 'paid')->count();
        $todayOrders = SmmOrder::whereDate('created_at', today())->count();

        return [
            Stat::make('Tổng Đơn Hàng SMM', $totalOrders)
                ->description('Tổng số đơn hàng SMM đã đặt.')
                ->color('success')
                ->icon('heroicon-o-shopping-cart'),

            Stat::make('Đơn Hàng SMM Chưa Thanh Toán', $unpaidOrders)
                ->description('Đơn hàng SMM chưa thanh toán.')
                ->color('danger')
                ->icon('heroicon-o-x-circle'), // Changed to a suitable icon

            Stat::make('Đơn Hàng SMM Đã Thanh Toán', $paidOrders)
                ->description('Đơn hàng SMM đã được thanh toán.')
                ->color('primary')
                ->icon('heroicon-o-check-circle'),

            Stat::make('Đơn Hàng SMM Hôm Nay', $todayOrders)
                ->description('Số đơn hàng SMM đã đặt hôm nay.')
                ->color('warning')
                ->icon('heroicon-o-calendar'),
        ];
    }
}
