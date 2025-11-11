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

class TransactionStatus
{
    const Prepared = "Prepared";
    const Started = "Started";
    const Succeeded = "Succeeded";
    const Timeout = "Timeout";
    const ShopIsDeleted = "ShopIsDeleted";
    const ShopIsClosed = "ShopIsClosed";
    const Rejected = "Rejected";
    const RejectedByShop = "RejectedByShop";
    const Storno = "Storno";
    const Reserved = "Reserved";
    const Deleted = "Deleted";
    const Expired = "Expired";
    const Authorized = "Authorized";
    const Reversed = "Reversed";
    const InvalidPaymentRecord = "InvalidPaymentRecord";
    const PaymentTimeOut = "PaymentTimeOut";
    const InvalidPaymentStatus = "InvalidPaymentStatus";
    const PaymentSenderOrRecipientIsInvalid = "PaymentSenderOrRecipientIsInvalid";
    const Unknown = "Unknown";
}