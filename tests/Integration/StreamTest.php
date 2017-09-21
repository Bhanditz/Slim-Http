<?php
/**
 * Slim Framework (https://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim-Http
 * @copyright Copyright (c) 2011-2017 Josh Lockhart
 * @license   https://github.com/slimphp/Slim-Http/blob/master/LICENSE (MIT License)
 */
namespace Slim\Tests\Http\Integration;

use Http\Psr7Test\StreamIntegrationTest;
use Psr\Http\Message\StreamInterface;
use Slim\Http\Stream;

class StreamTest extends StreamIntegrationTest
{
    use BaseTestFactories;

    /**
     * @param string|resource|StreamInterface $data
     *
     * @return StreamInterface
     */
    public function createStream($data)
    {
        if ($data instanceof StreamInterface) {
            return $data;
        } elseif (is_resource($data)) {
            return new Stream($data);
        } elseif (is_string($data)) {
            $s = fopen('php://temp', 'w+');
            fwrite($s, $data);
            return new Stream($s);
        }

        throw new \InvalidArgumentException();
    }
}
