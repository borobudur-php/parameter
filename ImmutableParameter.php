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

use ArrayIterator;

/**
 * @author  Iqbal Maulana <iq.bluejack@gmail.com>
 */
final class ImmutableParameter implements ParameterInterface
{
    /**
     * @var Parameter
     */
    private $parameter;

    public function __construct(array $parameters = [])
    {
        $this->parameter = new Parameter($parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function exclude(array $fields): ParameterInterface
    {
        $parameters = $this->parameter->exclude($fields)->all();

        return new ImmutableParameter($parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function all(): array
    {
        return $this->parameter->all();
    }

    /**
     * {@inheritdoc}
     */
    public function keys(): array
    {
        return $this->parameter->keys();
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $key, $default = null)
    {
        return $this->parameter->get($key, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function has(string $key): bool
    {
        return $this->parameter->has($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator(): ArrayIterator
    {
        return $this->parameter->getIterator();
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty(): bool
    {
        return $this->parameter->isEmpty();
    }
}
