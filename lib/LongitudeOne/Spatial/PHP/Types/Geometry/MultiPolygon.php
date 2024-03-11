<?php
/**
 * This file is part of the doctrine spatial extension.
 *
 * PHP 8.1
 *
 * (c) Alexandre Tranchant <alexandre.tranchant@gmail.com> 2017 - 2022
 * (c) Longitude One 2020 - 2022
 * (c) 2015 Derek J. Lambert
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace LongitudeOne\Spatial\PHP\Types\Geometry;

use LongitudeOne\Spatial\PHP\Types\AbstractMultiPolygon;
use LongitudeOne\Spatial\PHP\Types\MultiPolygonInterface;

/**
 * MultiPolygon object for MULTIPOLYGON geometry type.
 */
class MultiPolygon extends AbstractMultiPolygon implements GeometryInterface, MultiPolygonInterface
{
}
