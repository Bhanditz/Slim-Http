<?php
/**
 * Slim Framework (https://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim-Http
 * @copyright Copyright (c) 2011-2017 Josh Lockhart
 * @license   https://github.com/slimphp/Slim-Http/blob/master/LICENSE (MIT License)
 */
namespace Slim\Tests\Http\Integration;

use Http\Psr7Test\UploadedFileIntegrationTest;
use Psr\Http\Message\UploadedFileInterface;
use Slim\Http\UploadedFile;

class UploadedFileTest extends UploadedFileIntegrationTest
{
    use BaseTestFactories;

    /**
     * @return UploadedFileInterface that is used in the tests
     */
    public function createSubject()
    {
        $file = tempnam(sys_get_temp_dir(), 'Slim_Http_UploadedFileTest_');

        return new UploadedFile($file);
    }
}
