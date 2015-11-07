<?php

/**
 * This file is part of the GraphAware Neo4j Common package.
 *
 * (c) GraphAware Limited <http://graphaware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GraphAware\Common\Result;

interface RecordViewInterface
{
    public function keys();

    public function hasValues();

    public function value($key);

    public function getValueByIndex($index);

    public function record();
}
