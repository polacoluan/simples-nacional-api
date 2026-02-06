<?php

$grossRevenueLast12Months = [
    'annex_i' => [
        '1ª Faixa' => [
            'calcs' => [
                'revenue_min' => 0.00,
                'revenue_max' => 180000.00,
                'rate_percent' => 4.00,
                'deduction_amount' => 0.00,
            ],
            'partitions' => [
                'irpj_percent' => 5.50,
                'csll_percent' => 3.50,
                'cofins_percent' => 12.74,
                'pis_pasep_percent' => 2.76,
                'cpp_percent' => 41.50,
                'icms_percent' => 34.00,
            ],
        ],

        '2ª Faixa' => [
            'calcs' => [
                'revenue_min' => 180000.01,
                'revenue_max' => 360000.00,
                'rate_percent' => 7.30,
                'deduction_amount' => 5940.00,
            ],
            'partitions' => [
                'irpj_percent' => 5.50,
                'csll_percent' => 3.50,
                'cofins_percent' => 12.74,
                'pis_pasep_percent' => 2.76,
                'cpp_percent' => 41.50,
                'icms_percent' => 34.00,
            ],
        ],

        '3ª Faixa' => [
            'calcs' => [
                'revenue_min' => 360000.01,
                'revenue_max' => 720000.00,
                'rate_percent' => 9.50,
                'deduction_amount' => 13860.00,
            ],
            'partitions' => [
                'irpj_percent' => 5.50,
                'csll_percent' => 3.50,
                'cofins_percent' => 12.74,
                'pis_pasep_percent' => 2.76,
                'cpp_percent' => 42.00,
                'icms_percent' => 33.50,
            ],
        ],

        '4ª Faixa' => [
            'calcs' => [
                'revenue_min' => 720000.01,
                'revenue_max' => 1800000.00,
                'rate_percent' => 10.70,
                'deduction_amount' => 22500.00,
            ],
            'partitions' => [
                'irpj_percent' => 5.50,
                'csll_percent' => 3.50,
                'cofins_percent' => 12.74,
                'pis_pasep_percent' => 2.76,
                'cpp_percent' => 42.00,
                'icms_percent' => 33.50,
            ],
        ],

        '5ª Faixa' => [
            'calcs' => [
                'revenue_min' => 1800000.01,
                'revenue_max' => 3600000.00,
                'rate_percent' => 14.30,
                'deduction_amount' => 87300.00,
            ],
            'partitions' => [
                'irpj_percent' => 5.50,
                'csll_percent' => 3.50,
                'cofins_percent' => 12.74,
                'pis_pasep_percent' => 2.76,
                'cpp_percent' => 42.00,
                'icms_percent' => 33.50,
            ],
        ],

        '6ª Faixa' => [
            'calcs' => [
                'revenue_min' => 3600000.01,
                'revenue_max' => 4800000.00,
                'rate_percent' => 19.00,
                'deduction_amount' => 378000.00,
            ],
            'partitions' => [
                'irpj_percent' => 13.50,
                'csll_percent' => 10.00,
                'cofins_percent' => 28.27,
                'pis_pasep_percent' => 6.13,
                'cpp_percent' => 42.10,
                'icms_percent' => 0.00,
            ],
        ],
    ],
    'annex_ii' => [
        '1ª Faixa' => [
            'calcs' => [
                'revenue_min' => 0.00,
                'revenue_max' => 180000.00,
                'rate_percent' => 4.50,
                'deduction_amount' => 0.00,
            ],
            'partitions' => [
                'irpj_percent' => 5.50,
                'csll_percent' => 3.50,
                'cofins_percent' => 11.51,
                'pis_pasep_percent' => 2.49,
                'cpp_percent' => 37.50,
                'ipi_percent' => 7.50,
                'icms_percent' => 32.00,
            ],
        ],

        '2ª Faixa' => [
            'calcs' => [
                'revenue_min' => 180000.01,
                'revenue_max' => 360000.00,
                'rate_percent' => 7.80,
                'deduction_amount' => 5940.00,
            ],
            'partitions' => [
                'irpj_percent' => 5.50,
                'csll_percent' => 3.50,
                'cofins_percent' => 11.51,
                'pis_pasep_percent' => 2.49,
                'cpp_percent' => 37.50,
                'ipi_percent' => 7.50,
                'icms_percent' => 32.00,
            ],
        ],

        '3ª Faixa' => [
            'calcs' => [
                'revenue_min' => 360000.01,
                'revenue_max' => 720000.00,
                'rate_percent' => 10.00,
                'deduction_amount' => 13860.00,
            ],
            'partitions' => [
                'irpj_percent' => 5.50,
                'csll_percent' => 3.50,
                'cofins_percent' => 11.51,
                'pis_pasep_percent' => 2.49,
                'cpp_percent' => 37.50,
                'ipi_percent' => 7.50,
                'icms_percent' => 32.00,
            ],
        ],

        '4ª Faixa' => [
            'calcs' => [
                'revenue_min' => 720000.01,
                'revenue_max' => 1800000.00,
                'rate_percent' => 11.20,
                'deduction_amount' => 22500.00,
            ],
            'partitions' => [
                'irpj_percent' => 5.50,
                'csll_percent' => 3.50,
                'cofins_percent' => 11.51,
                'pis_pasep_percent' => 2.49,
                'cpp_percent' => 37.50,
                'ipi_percent' => 7.50,
                'icms_percent' => 32.00,
            ],
        ],

        '5ª Faixa' => [
            'calcs' => [
                'revenue_min' => 1800000.01,
                'revenue_max' => 3600000.00,
                'rate_percent' => 14.70,
                'deduction_amount' => 85500.00,
            ],
            'partitions' => [
                'irpj_percent' => 5.50,
                'csll_percent' => 3.50,
                'cofins_percent' => 11.51,
                'pis_pasep_percent' => 2.49,
                'cpp_percent' => 37.50,
                'ipi_percent' => 7.50,
                'icms_percent' => 32.00,
            ],
        ],

        '6ª Faixa' => [
            'calcs' => [
                'revenue_min' => 3600000.01,
                'revenue_max' => 4800000.00,
                'rate_percent' => 30.00,
                'deduction_amount' => 720000.00,
            ],
            'partitions' => [
                'irpj_percent' => 8.50,
                'csll_percent' => 7.50,
                'cofins_percent' => 20.96,
                'pis_pasep_percent' => 4.54,
                'cpp_percent' => 23.50,
                'ipi_percent' => 35.00,
                'icms_percent' => 0.00,
            ],
        ],
    ],
    'annex_iii' => [
        '1ª Faixa' => [
            'calcs' => [
                'revenue_min' => 0.00,
                'revenue_max' => 180000.00,
                'rate_percent' => 6.00,
                'deduction_amount' => 0.00,
            ],
            'partitions' => [
                'irpj_percent' => 4.00,
                'csll_percent' => 3.50,
                'cofins_percent' => 12.82,
                'pis_pasep_percent' => 2.78,
                'cpp_percent' => 43.40,
                'iss_percent' => 33.50,
            ],
        ],

        '2ª Faixa' => [
            'calcs' => [
                'revenue_min' => 180000.01,
                'revenue_max' => 360000.00,
                'rate_percent' => 11.20,
                'deduction_amount' => 9360.00,
            ],
            'partitions' => [
                'irpj_percent' => 4.00,
                'csll_percent' => 3.50,
                'cofins_percent' => 14.05,
                'pis_pasep_percent' => 3.05,
                'cpp_percent' => 43.40,
                'iss_percent' => 32.00,
            ],
        ],

        '3ª Faixa' => [
            'calcs' => [
                'revenue_min' => 360000.01,
                'revenue_max' => 720000.00,
                'rate_percent' => 13.50,
                'deduction_amount' => 17640.00,
            ],
            'partitions' => [
                'irpj_percent' => 4.00,
                'csll_percent' => 3.50,
                'cofins_percent' => 13.64,
                'pis_pasep_percent' => 2.96,
                'cpp_percent' => 43.40,
                'iss_percent' => 32.50,
            ],
        ],

        '4ª Faixa' => [
            'calcs' => [
                'revenue_min' => 720000.01,
                'revenue_max' => 1800000.00,
                'rate_percent' => 16.00,
                'deduction_amount' => 35640.00,
            ],
            'partitions' => [
                'irpj_percent' => 4.00,
                'csll_percent' => 3.50,
                'cofins_percent' => 13.64,
                'pis_pasep_percent' => 2.96,
                'cpp_percent' => 43.40,
                'iss_percent' => 32.50,
            ],
        ],

        '5ª Faixa' => [
            'calcs' => [
                'revenue_min' => 1800000.01,
                'revenue_max' => 3600000.00,
                'rate_percent' => 21.00,
                'deduction_amount' => 125640.00,
            ],
            'partitions' => [
                'irpj_percent' => 4.00,
                'csll_percent' => 3.50,
                'cofins_percent' => 12.82,
                'pis_pasep_percent' => 2.78,
                'cpp_percent' => 43.40,
                'iss_percent' => 33.50,
            ],
        ],

        '6ª Faixa' => [
            'calcs' => [
                'revenue_min' => 3600000.01,
                'revenue_max' => 4800000.00,
                'rate_percent' => 33.00,
                'deduction_amount' => 648000.00,
            ],
            'partitions' => [
                'irpj_percent' => 35.00,
                'csll_percent' => 15.00,
                'cofins_percent' => 16.03,
                'pis_pasep_percent' => 3.47,
                'cpp_percent' => 30.50,
                'iss_percent' => 0.00,
            ],
        ],
    ],
    'annex_iv' => [
        '1ª Faixa' => [
            'calcs' => [
                'revenue_min' => 0.00,
                'revenue_max' => 180000.00,
                'rate_percent' => 4.50,
                'deduction_amount' => 0.00,
            ],
            'partitions' => [
                'irpj_percent' => 18.80,
                'csll_percent' => 15.20,
                'cofins_percent' => 17.67,
                'pis_pasep_percent' => 3.83,
                'iss_percent' => 44.50,
            ],
        ],

        '2ª Faixa' => [
            'calcs' => [
                'revenue_min' => 180000.01,
                'revenue_max' => 360000.00,
                'rate_percent' => 9.00,
                'deduction_amount' => 8100.00,
            ],
            'partitions' => [
                'irpj_percent' => 19.80,
                'csll_percent' => 15.20,
                'cofins_percent' => 20.55,
                'pis_pasep_percent' => 4.45,
                'iss_percent' => 40.00,
            ],
        ],

        '3ª Faixa' => [
            'calcs' => [
                'revenue_min' => 360000.01,
                'revenue_max' => 720000.00,
                'rate_percent' => 10.20,
                'deduction_amount' => 12420.00,
            ],
            'partitions' => [
                'irpj_percent' => 20.80,
                'csll_percent' => 15.20,
                'cofins_percent' => 19.73,
                'pis_pasep_percent' => 4.27,
                'iss_percent' => 40.00,
            ],
        ],

        '4ª Faixa' => [
            'calcs' => [
                'revenue_min' => 720000.01,
                'revenue_max' => 1800000.00,
                'rate_percent' => 14.00,
                'deduction_amount' => 39780.00,
            ],
            'partitions' => [
                'irpj_percent' => 17.80,
                'csll_percent' => 19.20,
                'cofins_percent' => 18.90,
                'pis_pasep_percent' => 4.10,
                'iss_percent' => 40.00,
            ],
        ],

        '5ª Faixa' => [
            'calcs' => [
                'revenue_min' => 1800000.01,
                'revenue_max' => 3600000.00,
                'rate_percent' => 22.00,
                'deduction_amount' => 183780.00,
            ],
            'partitions' => [
                'irpj_percent' => 18.80,
                'csll_percent' => 19.20,
                'cofins_percent' => 18.08,
                'pis_pasep_percent' => 3.92,
                'iss_percent' => 40.00,
            ],
        ],

        '6ª Faixa' => [
            'calcs' => [
                'revenue_min' => 3600000.01,
                'revenue_max' => 4800000.00,
                'rate_percent' => 33.00,
                'deduction_amount' => 828000.00,
            ],
            'partitions' => [
                'irpj_percent' => 53.50,
                'csll_percent' => 21.50,
                'cofins_percent' => 20.55,
                'pis_pasep_percent' => 4.45,
                'iss_percent' => 0.00,
            ],
        ],
    ],
    'annex_v' => [
        '1ª Faixa' => [
            'calcs' => [
                'revenue_min' => 0.00,
                'revenue_max' => 180000.00,
                'rate_percent' => 15.50,
                'deduction_amount' => 0.00,
            ],
            'partitions' => [
                'irpj_percent' => 25.00,
                'csll_percent' => 15.00,
                'cofins_percent' => 14.10,
                'pis_pasep_percent' => 3.05,
                'cpp_percent' => 28.85,
                'iss_percent' => 14.00,
            ],
        ],

        '2ª Faixa' => [
            'calcs' => [
                'revenue_min' => 180000.01,
                'revenue_max' => 360000.00,
                'rate_percent' => 18.00,
                'deduction_amount' => 4500.00,
            ],
            'partitions' => [
                'irpj_percent' => 23.00,
                'csll_percent' => 15.00,
                'cofins_percent' => 14.10,
                'pis_pasep_percent' => 3.05,
                'cpp_percent' => 27.85,
                'iss_percent' => 17.00,
            ],
        ],

        '3ª Faixa' => [
            'calcs' => [
                'revenue_min' => 360000.01,
                'revenue_max' => 720000.00,
                'rate_percent' => 19.50,
                'deduction_amount' => 9900.00,
            ],
            'partitions' => [
                'irpj_percent' => 24.00,
                'csll_percent' => 15.00,
                'cofins_percent' => 14.92,
                'pis_pasep_percent' => 3.23,
                'cpp_percent' => 23.85,
                'iss_percent' => 19.00,
            ],
        ],

        '4ª Faixa' => [
            'calcs' => [
                'revenue_min' => 720000.01,
                'revenue_max' => 1800000.00,
                'rate_percent' => 20.50,
                'deduction_amount' => 17100.00,
            ],
            'partitions' => [
                'irpj_percent' => 21.00,
                'csll_percent' => 15.00,
                'cofins_percent' => 15.74,
                'pis_pasep_percent' => 3.41,
                'cpp_percent' => 23.85,
                'iss_percent' => 21.00,
            ],
        ],

        '5ª Faixa' => [
            'calcs' => [
                'revenue_min' => 1800000.01,
                'revenue_max' => 3600000.00,
                'rate_percent' => 23.00,
                'deduction_amount' => 62100.00,
            ],
            'partitions' => [
                'irpj_percent' => 23.00,
                'csll_percent' => 12.50,
                'cofins_percent' => 14.10,
                'pis_pasep_percent' => 3.05,
                'cpp_percent' => 23.85,
                'iss_percent' => 23.50,
            ],
        ],

        '6ª Faixa' => [
            'calcs' => [
                'revenue_min' => 3600000.01,
                'revenue_max' => 4800000.00,
                'rate_percent' => 30.50,
                'deduction_amount' => 540000.00,
            ],
            'partitions' => [
                'irpj_percent' => 35.00,
                'csll_percent' => 15.50,
                'cofins_percent' => 16.44,
                'pis_pasep_percent' => 3.56,
                'cpp_percent' => 29.50,
                'iss_percent' => 0.00,
            ],
        ],
    ]
];
