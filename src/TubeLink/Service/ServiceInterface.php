<?php
/*
 * This file is part of the TubeLink package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @licence MIT
 */

namespace TubeLink\Service;

use TubeLink\Video;

interface ServiceInterface
{
    /**
     * Try to extract video data from an URL.
     *
     * @param  string $url URL to a video provider
     *
     * @return Video|bool The video or FALSE if not supported
     */
    public function parse($url);

    /**
     * Get the HTML to integrate a video from a given URL.
     *
     * @param  Video  $video Video object
     *
     * @return string HTML code
     */
    public function html(Video $video);

    /**
     * Get the provider name
     *
     * @return string Lowercase name
     */
    public function getName();
}
