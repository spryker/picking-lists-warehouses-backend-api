<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\PickingListsWarehousesBackendApi\Dependency\Resource;

use Generated\Shared\Transfer\StockCriteriaTransfer;
use Generated\Shared\Transfer\WarehouseResourceCollectionTransfer;

interface PickingListsWarehousesBackendApiToWarehousesBackendApiResourceInterface
{
    /**
     * @param \Generated\Shared\Transfer\StockCriteriaTransfer $stockCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\WarehouseResourceCollectionTransfer
     */
    public function getWarehouseResourceCollection(StockCriteriaTransfer $stockCriteriaTransfer): WarehouseResourceCollectionTransfer;
}
