public function PrimoInferior($num)
{
    $num = 30;
    $result = 0;
    if ($num < 0) {
        return $result;
    } else {
        for ($i = 1; $i <= $num; $i++) {

            $counter = 0;
            for ($j = 1; $j <= $i; $j++) {

                if ($i % $j == 0) {

                    $counter++;
                }
            }

            if ($counter == 2) {

                $result = $i;
            }
        }
        return $result;
    }
}