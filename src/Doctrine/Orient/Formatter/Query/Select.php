<?php

/*
 * This file is part of the Doctrine\Orient package.
 *
 * (c) Alessandro Nadalin <alessandro.nadalin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Class Where
 *
 * @package     Doctrine\Orient
 * @subpackage  Formatter
 * @author      Daniele Alessandri <suppakilla@gmail.com>
 */

namespace Doctrine\Orient\Formatter\Query;

use Doctrine\Orient\Formatter\Query;
use Doctrine\Orient\Contract\Formatter\Query\Token as TokenFormatter;

class Select extends Query implements TokenFormatter
{
    public static function format(array $values)
    {
        return self::implodeRegular($values, '[:punct:]|\s');
    }
}