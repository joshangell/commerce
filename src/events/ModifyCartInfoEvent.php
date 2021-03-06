<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace craft\commerce\events;

use yii\base\Event;

/**
 * ModifyCartArray class.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since 2.2
 */
class ModifyCartInfoEvent extends Event
{
    // Properties
    // =========================================================================

    /**
     * @var array The cart as an array
     */
    public $cartInfo = [];
}
