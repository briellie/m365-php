<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LongRunningOperationStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* LongRunningOperationStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LongRunningOperationStatus extends Enum
{
    /**
    * The Enum LongRunningOperationStatus
    */
    const NOT_STARTED = "notStarted";
    const RUNNING = "running";
    const SUCCEEDED = "succeeded";
    const FAILED = "failed";
    const SKIPPED = "skipped";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
