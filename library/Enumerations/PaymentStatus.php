<?php

/**
 * Copyright 2024 Barion Payment Inc. All Rights Reserved.
 * <p/>
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * <p/>
 * http://www.apache.org/licenses/LICENSE-2.0
 * <p/>
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Barion\Enumerations;

class PaymentStatus
{
    const Prepared = "Prepared";
    const Started = "Started";
    const InProgress = "InProgress";
    const Waiting = "Waiting";
    const Reserved = "Reserved";
    const Authorized = "Authorized";
    const Canceled = "Canceled";
    const Succeeded = "Succeeded";
    const Failed = "Failed";
    const PartiallySucceeded = "PartiallySucceeded";
    const Expired = "Expired";

    /**
     * Emulates enum::from() for PHP 7.4
     *
     * @param string|null $value
     * @return string
     */
    public static function from(?string $value)
    {
        $allowed = [
            self::Prepared,
            self::Started,
            self::InProgress,
            self::Waiting,
            self::Reserved,
            self::Authorized,
            self::Canceled,
            self::Succeeded,
            self::Failed,
            self::PartiallySucceeded,
            self::Expired,
        ];

        if (in_array($value, $allowed, true)) {
            return $value;
        }

        // fallback if unknown status is returned by API
        return self::Prepared;
    }
}