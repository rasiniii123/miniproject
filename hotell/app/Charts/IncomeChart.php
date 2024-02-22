<?php

namespace App\Charts;

use App\Models\Room;
use Carbon\Carbon;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class IncomeChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $tahun = date('Y');
        $bulan = 12;
        $databulan = [];
        $datatotalproduk = [];

        for ($i = 1; $i <= $bulan; $i++) {
            $totalProduk = Room::whereYear('created_at', $tahun)->whereMonth('created_at', $i)->count();
            $datatotalproduk[] = $totalProduk;
            $databulan[] = Carbon::create()->month($i)->format('F');
        }

        return $this->chart->barChart()
            // ->setTitle('San Francisco vs Boston.')
            // ->setSubtitle('Wins during season 2021.')
            ->addData('Room', $datatotalproduk)
            ->setXAxis($databulan)
            ->setColors(['#A57DFC']);
            // ->setWidth(400);
    }
}
