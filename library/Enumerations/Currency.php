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

class Currency
{
    const Unspecified = "Unspecified";
    const HUF = "HUF";
    const EUR = "EUR";
    const USD = "USD";
    const CZK = "CZK";
    const RON = "RON";
    const PLN = "PLN";

    public static function from(?string $value): string
    {
        $allowed = [
            self::HUF,
            self::EUR,
            self::USD,
            self::CZK,
            self::RON,
            self::PLN,
        ];

        return in_array($value, $allowed, true) ? $value : self::Unspecified;
    }
}