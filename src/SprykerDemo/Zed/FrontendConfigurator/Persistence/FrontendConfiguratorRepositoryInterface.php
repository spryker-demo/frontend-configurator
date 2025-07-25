<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerDemo\Zed\FrontendConfigurator\Persistence;

use Generated\Shared\Transfer\FrontendConfiguratorTransfer;

interface FrontendConfiguratorRepositoryInterface
{
    /**
     * @param string $name
     *
     * @return \Generated\Shared\Transfer\FrontendConfiguratorTransfer|null
     */
    public function getFrontendConfigurationByName(string $name): ?FrontendConfiguratorTransfer;
}
