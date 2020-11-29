<?php
namespace App;

class Chop
{
    /**
     * Двоичный поиск
     * @param int $search
     * @param array $data
     * @return false|int|string
     */
    public static function search(int $search, array $data){
        if(empty($data)){
            return -1;
        }

        $left = 0;
        $right = count($data) - 1;

        while ($left != $right) {
            $i = $left + floor(($right - $left) / 2);
            if($data[$i] === $search) {
                return $i;
            }

            if ($search > $data[$i] && $left !== $i) {
                $left = $i;
            } elseif($search < $data[$i] && $right !== $i) {
                $right = $i;
            } else {
                $left = $right;
            }
        }
        return $data[$left] === $search ? $left : -1;
    }
}