<?php
/**
 * @package    Grav.Common.Page
 *
 * @copyright  Copyright (C) 2015 - 2018 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\Page\Medium;

use Grav\Common\Getters;
use Grav\Common\Grav;
use Grav\Common\Media\Interfaces\MediaCollectionInterface;
use Grav\Common\Media\Interfaces\MediaObjectInterface;
use Grav\Common\Utils;

abstract class AbstractMedia extends Getters implements MediaCollectionInterface
{
    protected $gettersVariable = 'instances';

    protected $instances = [];
    protected $images = [];
    protected $videos = [];
    protected $audios = [];
    protected $files = [];
    protected $media_order;

    /**
     * Get medium by filename.
     *
     * @param string $filename
     * @return Medium|null
     */
    public function get($filename)
    {
        return $this->offsetGet($filename);
    }

    /**
     * Call object as function to get medium by filename.
     *
     * @param string $filename
     * @return mixed
     */
    public function __invoke($filename)
    {
        return $this->offsetGet($filename);
    }

    /**
     * @param mixed $offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        $object = parent::offsetGet($offset);

        // It would be nice if previous image modification would not affect the later ones.
        //$object = $object ? clone($object) : null;

        return $object;
    }

    /**
     * Get a list of all media.
     *
     * @return array|MediaObjectInterface[]
     */
    public function all()
    {
        $this->instances = $this->orderMedia($this->instances);

        return $this->instances;
    }

    /**
     * Get a list of all image media.
     *
     * @return array|MediaObjectInterface[]
     */
    public function images()
    {
        $this->images = $this->orderMedia($this->images);
        return $this->images;
    }

    /**
     * Get a list of all video media.
     *
     * @return array|MediaObjectInterface[]
     */
    public function videos()
    {
        $this->videos = $this->orderMedia($this->videos);
        return $this->videos;
    }

    /**
     * Get a list of all audio media.
     *
     * @return array|MediaObjectInterface[]
     */
    public function audios()
    {
        $this->audios = $this->orderMedia($this->audios);
        return $this->audios;
    }

    /**
     * Get a list of all file media.
     *
     * @return array|MediaObjectInterface[]
     */
    public function files()
    {
        $this->files = $this->orderMedia($this->files);
        return $this->files;
    }

    /**
     * @param string $name
     * @param MediaObjectInterface $file
     */
    protected function add($name, $file)
    {
        $this->instances[$name] = $file;
        switch ($file->type) {
            case 'image':
                $this->images[$name] = $file;
                break;
            case 'video':
                $this->videos[$name] = $file;
                break;
            case 'audio':
                $this->audios[$name] = $file;
                break;
            default:
                $this->files[$name] = $file;
        }
    }

    /**
     * Order the media based on the page's media_order
     *
     * @param $media
     * @return array
     */
    protected function orderMedia($media)
    {
        if (null === $this->media_order) {
            $page = Grav::instance()['pages']->get($this->path);

            if ($page && isset($page->header()->media_order)) {
                $this->media_order = array_map('trim', explode(',', $page->header()->media_order));
            }
        }

        if (!empty($this->media_order) && is_array($this->media_order)) {
            $media = Utils::sortArrayByArray($media, $this->media_order);
        } else {
            ksort($media, SORT_NATURAL | SORT_FLAG_CASE);
        }

        return $media;
    }

    /**
     * Get filename, extension and meta part.
     *
     * @param  string $filename
     * @return array
     */
    protected function getFileParts($filename)
    {
        if (preg_match('/(.*)@(\d+)x\.(.*)$/', $filename, $matches)) {
            $name = $matches[1];
            $extension = $matches[3];
            $extra = (int) $matches[2];
            $type = 'alternative';

            if ($extra === 1) {
                $type = 'base';
                $extra = null;
            }
        } else {
            $fileParts = explode('.', $filename);

            $name = array_shift($fileParts);
            $extension = null;
            $extra = null;
            $type = 'base';

            while (($part = array_shift($fileParts)) !== null) {
                if ($part !== 'meta' && $part !== 'thumb') {
                    if (null !== $extension) {
                        $name .= '.' . $extension;
                    }
                    $extension = $part;
                } else {
                    $type = $part;
                    $extra = '.' . $part . '.' . implode('.', $fileParts);
                    break;
                }
            }
        }

        return array($name, $extension, $type, $extra);
    }
}
