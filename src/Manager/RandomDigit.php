<?php

namespace Zlavrov\Random\Manager;

/**
 * This class is random generator.
 *
 * @author zlavrov <zakhar.polosky@gmail.com>
 * @see    https://www.php-fig.org/psr/psr-0/
 * @see    https://www.php-fig.org/psr/psr-4/
 */
class RandomDigit {

    /**
     * Summary of ramdomInt
     * @param int $min          $min min integer
     * @param int $max          $max max integer
     * @return int
     */
    public function ramdomInt(int $min, int $max): int {
        return mt_rand($min, $max);
    }
}
