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

class TransactionType 
{
    const Commission = "Commission";
    const Shop = "Shop";
    const TransferToExistingUser = "TransferToExistingUser";
    const TransferToTechnicalAccount = "TransferToTechnicalAccount";
    const TransferFromTechnicalAccount = "TransferFromTechnicalAccount";
    const Storno = "Storno";
    const WithdrawFee = "WithdrawFee";
    const ClosureFee = "ClosureFee";
    const StornoBankTransferFee = "StornoBankTransferFee";
    const CashDepositFee = "CashDepositFee";
    const ForeignDepositFee = "ForeignDepositFee";
    const ForeignWithdrawFee = "ForeignWithdrawFee";
    const ForeignClosureFee = "ForeignClosureFee";
    const BankTransferWithdrawFeeStorno = "BankTransferWithdrawFeeStorno";
    const Reserve = "Reserve";
    const StornoReserve = "StornoReserve";
    const CardTopUpFee = "CardTopUpFee";
    const CardProcessingFee = "CardProcessingFee";
    const GatewayFee = "GatewayFee";
    const CardProcessingFeeStorno = "CardProcessingFeeStorno";
    const Unspecified = "Unspecified";
    const In = "In";
    const Withdraw = "Withdraw";
    const CashDeposit = "CashDeposit";
    const ForeignDeposit = "ForeignDeposit";
    const ForeignBankTransferFee = "ForeignBankTransferFee";
    const CashBankTransferFee = "CashBankTransferFee";
    const CustodyFee = "CustodyFee";
    const ForeignWithdraw = "ForeignWithdraw";
    const TransferBack = "TransferBack";
    const CardTopUp = "CardTopUp";
    const CardTopUpBankFee = "CardTopUpBankFee";
    const EmoneySubstractionRestore = "EmoneySubstractionRestore";
    const CardPayment = "CardPayment";
    const Refund = "Refund";
    const RefundToBankCard = "RefundToBankCard";
    const StornoUnSuccessfulRefundToBankCard = "StornoUnSuccessfulRefundToBankCard";
    const UnderReview = "UnderReview";
    const ReleaseReview = "ReleaseReview";
    const BankTransferPayment = "BankTransferPayment";
    const RefundToBankAccount = "RefundToBankAccount";
    const StornoUnSuccessfulRefundToBankAccount = "StornoUnSuccessfulRefundToBankAccount";
    const BankTransferPaymentFee = "BankTransferPaymentFee";
    const BarionBalanceProcessingFee = "BarionBalanceProcessingFee";
}