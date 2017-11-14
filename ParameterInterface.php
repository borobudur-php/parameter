<?php
/**
 * This file is part of the Borobudur package.
 *
 * (c) 2017 Borobudur <http://borobudur.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Borobudur\Component\Parameter;

use IteratorAggregate;

/**
 * @author  Iqbal Maulana <iq.bluejack@gmail.com>
 */
interface ParameterInterface extends IteratorAggregate
{
    /**
     * Exclude element based on given fields.
     *
     * @param array $fields
     *
     * @return ParameterInterface
     */
    public function exclude(array $fields): ParameterInterface;

    /**
     * Gets all data in parameters.
     *
     * @return array
     */
    public function all(): array;

    /**
     * Gets all keys in parameters.
     *
     * @return array
     */
    public function keys(): array;

    /**
     * Gets the value from specified key.
     *
     * @param string     $key
     * @param mixed|null $default
     *
     * @return mixed
     */
    public function get(string $key, $default = null);

    /**
     * Check whether the given key exist in parameter.
     *
     * @param string $key
     *
     * @return bool
     */
    public function has(string $key): bool;

    /**
     * Check whether the parameter is empty.
     *
     * @return bool
     */
    public function isEmpty(): bool;
}
