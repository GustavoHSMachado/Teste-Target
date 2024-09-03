<?php
$json = '{
    "faturamento_diario": [2000, 3000, 0, 1000, 2500, 4000, 0, 1500, 3500, 5000, 0, 0, 4500]
}';

$data = json_decode($json, true);
$faturamento = $data['faturamento_diario'];

$menor = PHP_INT_MAX;
$maior = PHP_INT_MIN;
$soma = 0;
$dias_com_faturamento = 0;

foreach ($faturamento as $valor) {
    if ($valor > 0) {
        if ($valor < $menor) {
            $menor = $valor;
        }
        if ($valor > $maior) {
            $maior = $valor;
        }
        $soma += $valor;
        $dias_com_faturamento++;
    }
}

$media = $soma / $dias_com_faturamento;
$dias_acima_da_media = 0;

foreach ($faturamento as $valor) {
    if ($valor > $media) {
        $dias_acima_da_media++;
    }
}

echo "Menor valor de faturamento: R$ " . number_format($menor, 2) . PHP_EOL;
echo "Maior valor de faturamento: R$ " . number_format($maior, 2) . PHP_EOL;
echo "Dias com faturamento acima da média: " . $dias_acima_da_media . PHP_EOL;
?>