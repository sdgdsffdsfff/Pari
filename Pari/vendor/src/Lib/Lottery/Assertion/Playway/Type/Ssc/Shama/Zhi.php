<?php
/**
 * 时时彩杀码(直选)判断是否中奖类
 */
namespace Lottery\Assertion\Playway\Type\Ssc\Shama;

use Lottery\Assertion\Playway\Type\Ssc\Zhi as SscZhi;

class Zhi extends SscZhi
{
    public function getBetCount($playway, $data)
    {
        if (!isset($data['number'])) {
            return 0;
        }
        $n = count($data['number']);

        return (10 - $n) * (10 - $n) * (10 - $n);
    }
}
