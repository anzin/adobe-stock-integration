<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\MediaGalleryRenditionsApi\Api;

use Exception;
use Magento\Framework\Exception\FileSystemException;
use Magento\Framework\Exception\LocalizedException;

interface GenerateRenditionsInterface
{
    /**
     * Generate Renditions image
     *
     * @param string $path
     * @throws FileSystemException
     * @throws LocalizedException
     * @throws Exception
     */
    public function execute(string $path): void;
}
