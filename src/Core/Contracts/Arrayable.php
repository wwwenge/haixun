<?php
namespace Haixun\Core\Contracts;

use ArrayAccess;

/**
 * Interface Arrayable.
 *
 */
interface Arrayable extends ArrayAccess
{
    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray();
}
