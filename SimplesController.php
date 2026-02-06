<?php

namespace App\Controllers;

class SimplesController
{

    public function index()
    {
        $data = getData();

        $annex = $data['annex'] ?? null;
        $grossIncome = $data["gross_income"] ?? null;
        $monthIncome = $data["month_income"] ?? null;

        $grossRevenueLast12Months = simplesData($annex);
        $frame = array_find(
            array: $grossRevenueLast12Months,
            callback: fn($aux) =>
            $grossIncome >= $aux['calcs']["revenue_min"] && $grossIncome <= $aux['calcs']["revenue_max"]
        );
        $frame['calcs']['bracket'] = array_key_first($grossRevenueLast12Months);

        $effectiveTaxRate = (
            (($grossIncome * ($frame['calcs']['rate_percent'] / 100)) - $frame['calcs']["deduction_amount"])
            / $grossIncome * 100
        );

        $taxDue = $monthIncome * ($effectiveTaxRate / 100);

        $partitionBreakdown = [];
        foreach ($frame['partitions'] as $partitionKey => $partitionPercent) {
            $partitionRate = $effectiveTaxRate * ($partitionPercent / 100);
            $partitionAmount = $taxDue * ($partitionPercent / 100);

            $partitionBreakdown[str_replace('_percent', '', $partitionKey)] = [
                'percent_of_tax' => $partitionPercent,
                'effective_rate' => $partitionRate,
                'amount' => $partitionAmount,
            ];
        }

        $annexPt = [
            "annex_i" => "Anexo I",
            "annex_ii" => "Anexo II",
            "annex_iii" => "Anexo III",
            "annex_iv" => "Anexo IV",
            "annex_ v" => "Anexo V",
        ];

        jsonResponse(
            200,
            [
                "annex" => $annexPt[$annex],
                "effective_tax_rate" => $effectiveTaxRate,
                "tax_due" => $taxDue,
                "gross_income" => $grossIncome,
                "month_income" => $monthIncome,
                "frame" => $frame['calcs'],
                "partition_breakdown" => $partitionBreakdown
            ]
        );
    }

    public function annex()
    {
        jsonResponse(status: 200, data: simplesData($_GET['code']));
    }
}
