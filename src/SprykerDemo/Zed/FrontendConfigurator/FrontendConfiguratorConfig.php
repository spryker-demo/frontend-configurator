<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerDemo\Zed\FrontendConfigurator;

use Spryker\Zed\Kernel\AbstractBundleConfig;

class FrontendConfiguratorConfig extends AbstractBundleConfig
{
    /**
     * @var string
     */
    public const FRONTEND_CONFIG_REDIS_KEY_SUFFIX = 'FRONTEND_CONFIG';
}
