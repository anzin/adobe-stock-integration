<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\AdobeStockImageApi\Api;

use Magento\Framework\Api\Search\SearchResultInterface;
use Magento\Framework\Api\Search\SearchCriteriaInterface;

/**
 * GetImageListInterface
 *
 * @api
 */
interface GetImageListInterface
{
    /**
     * Search for images based on search criteria
     *
     * @param \Magento\Framework\Api\Search\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Framework\Api\Search\SearchResultInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute(SearchCriteriaInterface $searchCriteria): SearchResultInterface;
}
