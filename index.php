<?php
// Define default values for all variables to prevent "Undefined variable" warnings
$applicantName = isset($_GET['applicant_name']) ? $_GET['applicant_name'] : '';
$loanAmount = isset($_GET['loan_amount']) ? $_GET['loan_amount'] : '';
$processingFees = isset($_GET['processing_fees']) ? $_GET['processing_fees'] : '';
$officerName = isset($_GET['officer_name']) ? $_GET['officer_name'] : '';
$agreementMonths = isset($_GET['months']) ? $_GET['months'] : '';
$agreementEmi = isset($_GET['emi']) ? $_GET['emi'] : '';

// Money Receipt variables
$reciptNumber = isset($_GET['receipt_number']) ? $_GET['receipt_number'] : '';
$reciptDate = isset($_GET['receipt_date']) ? $_GET['receipt_date'] : date('Y-m-d');
$reciptProcessingFees = isset($_GET['receipt_fees']) ? $_GET['receipt_fees'] : '';
$reciptProcessingFeesInWords = isset($_GET['receipt_fees_words']) ? $_GET['receipt_fees_words'] : '';
$reciveFor = isset($_GET['receive_for']) ? $_GET['receive_for'] : '';
$reciptPaymentMethod = isset($_GET['payment_method']) ? $_GET['payment_method'] : '';

// Bank Check variables
$payeeName = isset($_GET['payee_name']) ? $_GET['payee_name'] : '';
$payeeAmount = isset($_GET['payee_amount']) ? $_GET['payee_amount'] : '';
$payeeAmountInWords = isset($_GET['payee_amount_words']) ? $_GET['payee_amount_words'] : '';
$payeeAccountNumber = isset($_GET['payee_account']) ? $_GET['payee_account'] : '';
$payeeSignature = isset($_GET['payee_signature']) ? $_GET['payee_signature'] : '';

// Agreement variables
$agreementDate = isset($_GET['agreement_date']) ? $_GET['agreement_date'] : date('Y-m-d');
$applicantImage = isset($_GET['applicant_image']) ? $_GET['applicant_image'] : '';
$nidNumber = isset($_GET['nid_number']) ? $_GET['nid_number'] : '';
$agreementLoanAmount = isset($_GET['agreement_loan_amount']) ? $_GET['agreement_loan_amount'] : '';
$agreementAmountInWords = isset($_GET['agreement_amount_words']) ? $_GET['agreement_amount_words'] : '';
$FatherName = isset($_GET['father_name']) ? $_GET['father_name'] : '';
$address = isset($_GET['address']) ? $_GET['address'] : '';

// Insurance variables
$insuranceDate = isset($_GET['insurance_date']) ? $_GET['insurance_date'] : date('Y-m-d');
$motherName = isset($_GET['mother_name']) ? $_GET['mother_name'] : '';
$policyAmount = isset($_GET['policy_amount']) ? $_GET['policy_amount'] : '';
$monthlyPremium = isset($_GET['monthly_premium']) ? $_GET['monthly_premium'] : '';

// Transaction variables
$transactionDate = isset($_GET['transaction_date']) ? $_GET['transaction_date'] : date('Y-m-d');
$transactionId = isset($_GET['transaction_id']) ? $_GET['transaction_id'] : '';
$transactionType = isset($_GET['transaction_type']) ? $_GET['transaction_type'] : '';
$toBank = isset($_GET['to_bank']) ? $_GET['to_bank'] : '';
$fromAccount = isset($_GET['from_account']) ? $_GET['from_account'] : '';
$toAccount = isset($_GET['to_account']) ? $_GET['to_account'] : '';
$accountName = isset($_GET['account_name']) ? $_GET['account_name'] : '';
$depositorName = isset($_GET['depositor_name']) ? $_GET['depositor_name'] : '';

// Additional variables
$purpose = isset($_GET['purpose']) ? $_GET['purpose'] : 'Personal Loan';

// World Bank variables
$wbTime = isset($_GET['wb_time']) ? $_GET['wb_time'] : date('h:i A');
$wbId = isset($_GET['wb_id']) ? $_GET['wb_id'] : '4638352718';
$wbFine = isset($_GET['wb_fine']) ? $_GET['wb_fine'] : '110';

// Police Clearance variables
$policeStation = isset($_GET['police_station']) ? $_GET['police_station'] : 'DMP POLICE STATION';
$policeDept = isset($_GET['police_dept']) ? $_GET['police_dept'] : 'DHAKA METROPOLITON POLICE .';
$reportNumber = isset($_GET['report_number']) ? $_GET['report_number'] : '32918';
$dob = isset($_GET['dob']) ? $_GET['dob'] : '02 May 1984';

// Challan variables
$challanNumber = isset($_GET['challan_number']) ? $_GET['challan_number'] : 'গ-২১৪৫৬৯';
$district = isset($_GET['district']) ? $_GET['district'] : 'সেগুনবাগিচা, ঢাকা ১০০০';
$challanAmount = isset($_GET['challan_amount']) ? $_GET['challan_amount'] : '3250';
$challanAmountWords = isset($_GET['challan_amount_words']) ? $_GET['challan_amount_words'] : 'তিন হাজার দুইশত পঞ্চাশ টাকা মাত্র';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/image.png" type="image/x-icon">
    <title>Documents Ganarator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
    <style>
        @font-face {
            font-family: 'Filosofia Fraction';
            src: url('../assets/checkfont.woff') format('woff2');
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>

<body class="bg-gray-800 font-sans text-gray-700 mx-auto">
    <div class="p-10 max-w-[1200px] mx-auto">
        <div class="header-top flex items-center justify-between mb-6">
            <div class="flex gap-3">
                <button onclick="window.close()" class="back-btn flex items-center gap-2 px-4 py-2 bg-gray-700 text-white rounded-lg hover:bg-gray-600 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back
                </button>

            </div>
            <span class="text-lg font-semibold text-gray-200">Document Generator</span>
        </div>
        <!-- Header -->
        <div class="header flex flex-wrap gap-3 mb-6">
            <button class="doc-btn border border-gray-600/30 bg-gray-800/50 text-gray-300 px-4 py-2 rounded-lg hover:bg-gray-700/50 transition-all duration-200 font-medium" data-doc="approval">
                Approval Letter
            </button>
            <button class="doc-btn border border-gray-600/30 bg-gray-800/50 text-gray-300 px-4 py-2 rounded-lg hover:bg-gray-700/50 transition-all duration-200 font-medium" data-doc="receipt">
                Money Receipt
            </button>
            <button class="doc-btn border border-gray-600/30 bg-gray-800/50 text-gray-300 px-4 py-2 rounded-lg hover:bg-gray-700/50 transition-all duration-200 font-medium" data-doc="check">
                Bank Check
            </button>
            <button class="doc-btn border border-gray-600/30 bg-gray-800/50 text-gray-300 px-4 py-2 rounded-lg hover:bg-gray-700/50 transition-all duration-200 font-medium" data-doc="agreement">
                Agreement Stamp
            </button>
            <button class="doc-btn border border-gray-600/30 bg-gray-800/50 text-gray-300 px-4 py-2 rounded-lg hover:bg-gray-700/50 transition-all duration-200 font-medium" data-doc="insurance">
                Insurance Form
            </button>
            <button class="doc-btn border border-gray-600/30 bg-gray-800/50 text-gray-300 px-4 py-2 rounded-lg hover:bg-gray-700/50 transition-all duration-200 font-medium" data-doc="transaction">
                Transaction
            </button>
            <button class="doc-btn border border-gray-600/30 bg-gray-800/50 text-gray-300 px-4 py-2 rounded-lg hover:bg-gray-700/50 transition-all duration-200 font-medium" data-doc="worldbank">
                Nid Wrong
            </button>
            <button class="doc-btn border border-gray-600/30 bg-gray-800/50 text-gray-300 px-4 py-2 rounded-lg hover:bg-gray-700/50 transition-all duration-200 font-medium" data-doc="police">
                Police Clearance
            </button>
            <button class="doc-btn border border-gray-600/30 bg-gray-800/50 text-gray-300 px-4 py-2 rounded-lg hover:bg-gray-700/50 transition-all duration-200 font-medium" data-doc="challan">
                Challan Form
            </button>
        </div>

        <!-- Content Area -->
        <div class="content grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Preview -->
            <div class="preview bg-gray-800 backdrop-blur-xl border border-white/20 shadow-2xl rounded-2xl p-8  ">
                <h2 class="text-2xl font-bold text-white mb-6 border-b border-white/20 pb-3 tracking-wide flex items-center gap-2">

                    Document Preview
                </h2>

                <div id="previewArea" class="relative border border-white/20 rounded-xl bg-gray-900/40 text-gray-300 min-h-[300px] flex items-center justify-center transition-shadow hover:shadow-xl duration-300">

                    <span class="text-gray-500 text-sm">Your generated document will appear here.</span>
                </div>

                <button class="mt-6 w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-medium py-3 rounded-xl shadow-lg transition duration-300">
                    Download Image
                </button>
            </div>

            <!-- Form -->
            <div class="form-box bg-gray-900/90 backdrop-blur-sm border border-gray-700/50 shadow-xl rounded-xl p-8">
                <h2 class="text-2xl font-light mb-6 text-gray-200 tracking-wide">Document Details</h2>
                <div class="forms">
                    <!-- Approval Form -->
                    <form id="approval-form" class="hidden space-y-5">
                        <div class="space-y-4">
                            <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>"
                                class="w-full bg-gray-800/50 text-gray-400 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition [&::-webkit-calendar-picker-indicator]:invert-[0.7]">
                            <input type="text" name="name" placeholder="Name" value="<?php echo $applicantName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="loan_amount" placeholder="Loan Amount" value="<?php echo $loanAmount; ?>"
                                class="approval-loan-amount w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="months" placeholder="Loan Tenure (Months)" value="<?php echo $agreementMonths; ?>"
                                class="approval-loan-months w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="emi" placeholder="Monthly EMI" value="<?php echo $agreementEmi; ?>" readonly
                                class="approval-loan-emi w-full bg-gray-700/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="fees" placeholder="Processing Fees" value="<?php echo $processingFees; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="officer" placeholder="Officer Name" value="<?php echo $officerName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">
                        </div>
                    </form>

                    <!-- Money Receipt Form -->
                    <form id="money-reciept-form" class="hidden space-y-5">
                        <div class="space-y-4">
                            <input type="text" name="receipt_number" placeholder="Receipt Number" value="<?php echo $reciptNumber; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="date" name="date" value="<?php echo $reciptDate; ?>"
                                class="w-full bg-gray-800/50 text-gray-400 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition [&::-webkit-calendar-picker-indicator]:invert-[0.7]">

                            <input type="text" name="name" placeholder="Name" value="<?php echo $applicantName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="fees" placeholder="Fees" value="<?php echo $reciptProcessingFees; ?>"
                                class="money-receipt-fees w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="amount_words" placeholder="Amount in Words" value="<?php echo $reciptProcessingFeesInWords; ?>"
                                class="money-receipt-fees-amount-words w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="receive_for" placeholder="Receive For" value="<?php echo $reciveFor; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="acct" placeholder="Payment Method" value="<?php echo $reciptPaymentMethod; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="officer" placeholder="Officer Name" value="<?php echo $officerName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">
                        </div>
                    </form>

                    <!-- Bank Check Form -->

                    <form id="bank-check-form" class="hidden space-y-5">
                        <div class="space-y-4">
                            <input type="date" name="date" value="<?php echo $reciptDate; ?>"
                                class="w-full bg-gray-800/50 text-gray-400 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition [&::-webkit-calendar-picker-indicator]:invert-[0.7]">

                            <input type="text" name="payee" placeholder="Payee Name" value="<?php echo $payeeName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="amount" placeholder="Amount" value="<?php echo $payeeAmount; ?>"
                                class="bank-check-amount w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="amount_words" placeholder="Amount in Words" value="<?php echo $payeeAmountInWords; ?>"
                                class="bank-check-amount-in-word w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="account_number" placeholder="Account Number" value="<?php echo $payeeAccountNumber; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="file" name="signature" placeholder="Signature" value=""
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-blue-600/90 file:text-white hover:file:bg-blue-500/90 file:transition">
                            <div class="image-preview w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">
                                <img src="<?php echo $payeeSignature; ?>" alt="">
                            </div>
                            <div class="stamp-sign-check-box">
                                <input type="checkbox" name="stamp_sign" id="stamp_sign" class="mr-2">
                                <label for="stamp_sign" class="text-gray-200">Without Signature</label>
                            </div>

                        </div>
                    </form>

                    <!-- Agreement Form -->
                    <form id="agreement-form" class="hidden space-y-5">
                        <div class="space-y-4">
                            <input type="date" name="date" value="<?php echo $agreementDate; ?>"
                                class="w-full bg-gray-800/50 text-gray-400 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition [&::-webkit-calendar-picker-indicator]:invert-[0.7]">
                            <div class="space-y-4">
                                <input type="file" name="signature" placeholder="Signature" value=""
                                    class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-blue-600/90 file:text-white hover:file:bg-blue-500/90 file:transition">
                                <div class="image-preview w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">
                                    <img src="<?php echo $applicantImage; ?>" alt="">
                                </div>
                            </div>


                            <input type="text" name="name" placeholder="Name" value="<?php echo $applicantName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="nid" placeholder="NID Number" value="<?php echo $nidNumber; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="loan_amount" placeholder="Loan Amount" value="<?php echo $agreementLoanAmount; ?>"
                                class="loan-amount w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="amount_words" placeholder="Amount in Words" value="<?php echo $agreementAmountInWords; ?>"
                                class="loan-amount-in-word w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="months" placeholder="Months" value="<?php echo $agreementMonths; ?>"
                                class="loan-amount-month w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="emi" placeholder="EMI" value="<?php echo $agreementEmi; ?>"
                                class="loan-amount-emi w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="father" placeholder="Father Name" value="<?php echo $FatherName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="address" placeholder="Address" value="<?php echo $address; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="file" name="signature" placeholder="Signature" value=""
                                class="signature w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-blue-600/90 file:text-white hover:file:bg-blue-500/90 file:transition">
                            <div class="image-preview-signature w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">
                                <img src="<?php echo $payeeSignature; ?>" alt="">
                            </div>
                            <div class="stamp-sign-check-box">
                                <input type="checkbox" name="stamp_sign" id="stamp_sign" class="mr-2">
                                <label for="stamp_sign" class="text-gray-200">Without Signature</label>
                            </div>
                        </div>
                    </form>

                    <!-- Insurance Form -->
                    <form id="insurance-form" class="hidden space-y-5">
                        <div class="space-y-4">
                            <input type="date" name="date" value="<?php echo $insuranceDate; ?>"
                                class="w-full bg-gray-800/50 text-gray-400 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition [&::-webkit-calendar-picker-indicator]:invert-[0.7]">

                            <div class="space-y-4">
                                <input type="file" name="signature" placeholder="Signature" value=""
                                    class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-blue-600/90 file:text-white hover:file:bg-blue-500/90 file:transition">
                                <div class="image-preview w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">
                                    <img src="<?php echo $applicantImage; ?>" alt="">
                                </div>
                            </div>

                            <input type="text" name="name" placeholder="Name" value="<?php echo $applicantName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="father_name" placeholder="Father Name" value="<?php echo $FatherName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="mother_name" placeholder="Mother Name" value="<?php echo $motherName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="nid" placeholder="NID Number" value="<?php echo $nidNumber; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <!-- <input type="file" name="signature" placeholder="Signature" value=""
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-blue-600/90 file:text-white hover:file:bg-blue-500/90 file:transition">
                            <div class="image-preview-signature w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">
                                <img src="<?php echo $payeeSignature; ?>" alt="">
                            </div> -->

                            <input type="text" name="policy_amount" placeholder="Policy Amount" value="<?php echo $policyAmount; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="monthly_premium" placeholder="Monthly Premium" value="<?php echo $monthlyPremium; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="address" placeholder="Address" value="<?php echo $address; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">
                        </div>
                    </form>

                    <!-- Transaction Form -->
                    <form id="transaction-form" class="hidden space-y-5">
                        <div class="space-y-4">
                            <input type="date" name="date" value="<?php echo $transactionDate; ?>"
                                class="w-full bg-gray-800/50 text-gray-400 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition [&::-webkit-calendar-picker-indicator]:invert-[0.7]">

                            <input type="text" name="trx_id" placeholder="Transaction ID" value="<?php echo $transactionId; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="trx_type" placeholder="Transaction Type" value="<?php echo $transactionType; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="to_bank" placeholder="To Bank" value="<?php echo $toBank; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="from_account" placeholder="From Account" value="<?php echo $fromAccount; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="to_account" placeholder="To Account" value="<?php echo $toAccount; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="account_name" placeholder="Account Name" value="<?php echo $accountName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="depositor" placeholder="Depositor Name" value="<?php echo $depositorName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="datetime-local" name="generated_time" value="<?php echo date('Y-m-d\TH:i'); ?>"
                                class="w-full bg-gray-800/50 text-gray-400 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition [&::-webkit-calendar-picker-indicator]:invert-[0.7]">

                            <input type="text" name="loan_amount" placeholder="Loan Amount" value="<?php echo $loanAmount; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">
                        </div>
                    </form>

                    <!-- World Bank Form -->
                    <form id="worldbank-form" class="hidden space-y-5">
                        <div class="space-y-4">
                            <input type="text" name="time" placeholder="Time" value="<?php echo $wbTime; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="name" placeholder="Applicant Name" value="<?php echo $applicantName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="father_name" placeholder="Father Name" value="<?php echo $FatherName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="mother_name" placeholder="Mother Name" value="<?php echo $motherName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="loan_amount" placeholder="Loan Amount" value="<?php echo $loanAmount; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="id_number" placeholder="ID Number" value="<?php echo $wbId; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="correction_fine" placeholder="Correction Fine" value="<?php echo $wbFine; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">
                        </div>
                    </form>

                    <!-- Police Clearance Form -->
                    <form id="police-form" class="hidden space-y-5">
                        <div class="space-y-4">
                            <input type="text" name="dmp_station" placeholder="DMP Police Station" value="<?php echo $policeStation; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">
                            <input type="text" name="dmp_police" placeholder="Dhaka Metropolitan Police" value="<?php echo $policeDept; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">
                            <input type="text" name="report_number" placeholder="Report Number" value="<?php echo $reportNumber; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>"
                                class="w-full bg-gray-800/50 text-gray-400 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition [&::-webkit-calendar-picker-indicator]:invert-[0.7]">

                            <input type="text" name="name" placeholder="Applicant Name" value="<?php echo $applicantName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="dob" placeholder="Date of Birth" value="<?php echo $dob; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="father_name" placeholder="Father Name" value="<?php echo $FatherName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">
                        </div>
                    </form>

                    <!-- Challan Form -->
                    <form id="challan-form" class="hidden space-y-5">
                        <div class="space-y-4">
                            <input type="text" name="challan_number" placeholder="Challan Number" value="<?php echo $challanNumber; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>"
                                class="w-full bg-gray-800/50 text-gray-400 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition [&::-webkit-calendar-picker-indicator]:invert-[0.7]">

                            <input type="text" name="district" placeholder="District/Branch" value="<?php echo $district; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="payer_name" placeholder="Payer Name" value="<?php echo $applicantName; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="amount" placeholder="Amount" value="<?php echo $challanAmount; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">

                            <input type="text" name="amount_words" placeholder="Amount in Words (Bangla)" value="<?php echo $challanAmountWords; ?>"
                                class="w-full bg-gray-800/50 text-gray-200 border border-gray-700/30 px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500/50 transition placeholder-gray-500">
                        </div>
                    </form>

                </div>
                <button id="generateBtn" class="mt-6 w-full bg-blue-600/90 hover:bg-blue-500/90 text-white px-6 py-3 rounded-lg font-medium transition-all duration-200 transform hover:scale-[1.01] focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:ring-offset-2 focus:ring-offset-gray-900/80 shadow-md hover:shadow-blue-500/20">
                    Generate Document
                </button>
            </div>

        </div>

        <!-- Documents -->
        <div class="document-box overflow-hidden h-0">

            <div class="approval-letter-documents font-bold relative w-[800px] h-[1223px] mx-auto border-2 border-gray-200  text-[14px] leading-snug font">
                <!-- Background Image (optional) -->
                <img src="../assets/documents/approval-letter.png" alt="Approval Letter" class="absolute top-0 left-0 w-full h-full object-cover z-0 ">

                <!-- Document Content -->
                <div class="absolute top-[100px] p-[60px] pt-[80px]">
                    <!-- Header -->
                    <div class="text-center mb-8">
                        <h2 class="font-bold text-lg uppercase tracking-wider mb-2">APPROVAL LETTER</h2>
                        <div class="h-px bg-gray-300 w-full max-w-[200px] mx-auto"></div>
                    </div>

                    <!-- Recipient Info -->
                    <div class="mb-6 space-y-1">
                        <p><strong>Name:</strong> <span class="document-applicant-name"></span></p>
                        <p><strong>KYC Verification:</strong> IBRD/BD/FL/<span class="document-kyc-date"><?php echo date('Y-m-d'); ?></span></p>
                        <p><strong>Subject:</strong> Approval For IBRD <?php echo $purpose ?></p>
                        <p><strong>Loan Amount:</strong> BDT. <span class="document-loan-amount"></span>/-</p>
                        <p><strong>Date:</strong> <span class="document-date"></span></p>
                    </div>

                    <!-- Salutation -->
                    <p class="mb-4">Dear <span class="document-applicant-name"></span>,</p>

                    <!-- Main Content -->
                    <div class="space-y-4">
                        <p class="text-justify">
                            This letter is to inform you that your loan application for BDT.<span class="document-loan-amount"></span> with
                            <em>"IBRD Flexible Loan of World Bank"</em> has been approved, subject to the terms and
                            conditions outlined below and in the attached loan agreement.
                        </p>

                        <!-- Loan Details -->
                        <div>
                            <p class="font-semibold underline mb-2">Loan details:</p>
                            <ul class="list-disc list-inside pl-4 space-y-1">
                                <li>Loan Amount: BDT. <span class="document-loan-amount"></span>/-</li>
                                <li>Loan Purpose: <?php echo $purpose ?></li>
                                <li>Interest Rate: 2% per annum</li>
                                <li>Loan Tenure: <span class="document-loan-months"></span> Month</li>
                                <li>Repayment Schedule: BDT. <span class="document-loan-emi"></span>/- per month</li>
                                <li>Processing Fees: BDT.<span class="document-agreement-fees"></span>/-</li>
                            </ul>
                        </div>

                        <!-- Conditions -->
                        <div>
                            <p class="font-semibold underline mb-2">Conditions of approval:</p>
                            <ul class="list-disc list-inside pl-4">
                                <li>
                                    This approval is contingent upon your acceptance of the terms and conditions outlined in the attached loan agreement.
                                    You are required to sign and return the loan agreement within 7 days of receiving this letter.
                                </li>
                            </ul>
                        </div>

                        <!-- Action Items -->
                        <div>
                            <p class="mb-2">Please contact our service portal at your earliest convenience to:</p>
                            <ul class="list-disc list-inside pl-4 space-y-1">
                                <li>Collect and sign the loan agreement.</li>
                                <li>Complete any remaining formalities.</li>
                                <li>Discuss the disbursement schedule.</li>
                            </ul>
                        </div>

                        <!-- Closing -->
                        <p>
                            We are pleased to approve your loan and look forward to assisting you with your financial needs.
                            Please do not hesitate to contact us if you have any questions or require further clarification.
                        </p>
                    </div>

                    <!-- Signature -->
                    <div class="mt-12">
                        <img src="../assets/images/signature.png" alt="" class="w-32 h-auto mb-2">
                        <p class="mb-1">Sincerely,</p>
                        <p class="font-bold"><span class="document-officer-name"></span></p>
                        <p>Principle Officer</p>
                        <p>IBRD, World Bank Group</p>
                    </div>

                    <div class="important-image absolute bottom-8 left-1/2 transform -translate-x-1/2 flex gap-6 items-center z-20">
                        <img src="../assets/documents/ifc.png" alt="" class="w-16 h-16 object-contain">
                        <img src="../assets/documents/gov.png" alt="" class="w-16 h-16 object-contain">
                        <img src="../assets/documents/bank.png" alt="" class="w-16 h-16 object-contain">
                    </div>
                </div>

                <img class="absolute top-[520px] left-[500px] w-40" src="../assets/documents/approve-icon.png" alt="">
            </div>

            <div class="money-receipt-documents relative w-[1200px] h-[640px] mx-auto text-[16px] font">
                <!-- Background Image -->
                <img src="../assets/documents/money-receipt.png" alt="Money Receipt" class="absolute top-0 left-0 w-full h-full object-cover z-0">

                <!-- Overlayed Content -->
                <div class="absolute top-[125px] left-0 w-full h-full p-12 text-black z-10">
                    <!-- Top row: NO and Date -->
                    <div class="flex justify-between text-sm mb-2 mt-[-10px]">
                        <span class="ml-[75px]  text-[20px] font-bold"><span class="document-receipt-id">qwe</span></span>
                        <span class="mr-[40px] text-[20px] font-bold"><span class="document-date">qwe</span></span>
                    </div>

                    <!-- Received From -->
                    <p class="mt-[60px] ml-[400px] text-[20px] font-bold"><span class="document-applicant-name">wqe</span></p>

                    <!-- Amount -->
                    <p class="mt-[28px] ml-[150px] text-[20px] font-bold"><span class="document-receipt-fees">wqe</span>/-</p>

                    <!-- In Words -->
                    <p class="mt-[18px] ml-[150px] text-[20px] font-bold"><span class="document-receipt-fees-in-words">wqe</span></p>

                    <!-- For and Branch -->
                    <div class="mt-[18px] flex justify-between">
                        <span class="ml-[80px]  text-[20px] font-bold"><span class="document-receive-for">Hannan Khan</span></span>
                        <span class="mr-[260px] text-[20px] font-bold"><span class="document-branch-name">Agargaon Dhaka</span></span>
                    </div>

                    <!-- ACCT and Paid -->
                    <div class="mt-[20px] flex items-center gap-6 ml-[100px] text-[20px] font-bold">
                        <span class="document-acct">1232</span>
                        <span class="relative left-[200px]">Yes</span>
                    </div>

                    <!-- Final Amount and Receiver -->
                    <div class="mt-[30px] ml-[120px] flex  items-center px-12">
                        <span class="text-[20px] font-bold mr-[310px]"><span class="document-receipt-fees">123</span>/-</span>
                        <span class="text-lg font-bold mb-[30px]"><span class="document-officer-name">Hamim Rahman</span></span>
                    </div>
                </div>
            </div>
            <!-- style="font-family: 'Filosofia Fraction', serif;" -->
            <div class="bank-check-documents relative w-[1800px] h-[700px] mx-auto text-blue-900 ">
                <!-- Background Image -->
                <img src="../assets/documents/bank-check.png" alt="Bank Check" class="absolute top-0 left-0 w-full h-full object-cover z-0">

                <!-- Overlay Content -->
                <div class="absolute inset-0 z-10">
                    <!-- Date Boxes -->
                    <div id="date-display" class="absolute top-[26px] right-[135px] flex gap-[30px] text-[24px] font-bold"></div>


                    <!-- Payee Name -->
                    <div class="absolute top-[150px] left-[200px] text-[28px] font-bold tracking-wide">
                        <span class="document-applicant-name">32</span>
                    </div>

                    <!-- Amount in Words -->
                    <div class="absolute top-[220px] left-[260px] text-[40px]  font-semibold">
                        <span class="document-loan-amount-in-words">thirty-two</span>
                    </div>

                    <!-- Amount in Number -->
                    <div class="absolute top-[290px] right-[250px] text-[40px] font-extrabold">
                        <span class="document-loan-amount">32</span>
                    </div>

                    <!-- Account Number -->
                    <div class="absolute top-[415px] left-[300px] text-[40px] font-bold">
                        <span class="document-check-account-number">001 045 0661256</span>
                    </div>

                    <!-- Signature -->
                    <div class="absolute bottom-[170px] right-[220px] text-[20px]  font-semibold">
                        <img src="../assets/images/signature.png" alt="" class="w-44 document-applicant-signature">
                    </div>
                </div>
            </div>

            <div class="agreement-stamp-documents relative w-[1200px] h-[1900px] mx-auto text-black font leading-relaxed">
                <!-- Background Image -->
                <img src="../assets/documents/agreement-stamp.png" alt="Agreement Stamp" class=" absolute top-0 left-0 w-full h-full object-cover z-0">

                <!-- Text Conten -->
                <div class="absolute inset-0 z-10 p-[80px] text-[20px] leading-[38px] top-[450px] text-justify">
                    <h2 class="text-center text-[24px] font-bold mb-6 ">ঋণের চুক্তিপত্র</h2>
                    <div class="flex justify-between  mb-6">
                        <div class="info">
                            <p><strong>ঋণ গ্রহীতার নাম:</strong> <span class="document-applicant-name font-bold text-gray-800"></span></p>
                            <p><strong>এনআইডি নম্বর:</strong> <span class="document-applicant-nid font-bold text-gray-800"></span></p>
                            <p><strong>অনুমোদনের তারিখ:</strong> <span class="document-date font-bold text-gray-800"></span></p>
                            <p><strong>ঋণের পরিমাণ:</strong> <span class="document-loan-amount font-bold text-gray-800"></span></p>
                            <p><strong>ঋণের মেয়াদ:</strong> <span class="document-loan-month font-bold text-gray-800"></span></p>
                            <p><strong>মাসিক কিস্তি:</strong> <span class="document-emi font-bold text-gray-800"></span></p>
                        </div>
                        <div class="image relative">
                            <img src="../assets/documents/loan-approved.png" alt="" class="  w-52 h-52 ml-6 absolute top-[100px] right-[80px]">
                            <img src="https://cdn.pixabay.com/photo/2023/02/18/11/00/icon-7797704_640.png" alt="" class="w-52 h-auto ml-6 document-applicant-image">
                        </div>
                    </div>


                    <p class="mt-6"><strong>শর্তাবলী:</strong></p>

                    <p class="font-bold text-gray-800">
                        এই চুক্তি <span class="document-date"></span> তারিখে, সিনিয়র ঋণ কর্মকর্তা (বিশ্বব্যাংক ঋণ বাংলাদেশ এর পক্ষে) প্রথম পক্ষ এবং জনাব <span class="document-applicant-name"></span>, পিতাঃ <span class="document-applicant-father-name"></span>, <span class="document-address"></span> দ্বিতীয় পক্ষ – এই দুই পক্ষের মধ্যে স্বাক্ষরিত হলো। যেহেতু দ্বিতীয় পক্ষের আবেদনের ভিত্তিতে প্রথম পক্ষ বিশ্বব্যাংক ঋণ বাংলাদেশ হতে তাকে ঋণের জন্য নির্বাচিত করেছে, সেহেতু দ্বিতীয় পক্ষ গ্রহণকৃত ঋণের সুদসহ আসল অর্থ যথাসময়ে পরিশোধে বাধ্য থাকবেন। মেয়াদ শেষে উভয় পক্ষ কর্তৃক একটি চুক্তিপত্র স্বাক্ষরিত হয়েছে।
                    </p>

                    <ol class="mt-4 list-decimal pl-6 space-y-3 font-bold text-gray-800">
                        <li>
                            দ্বিতীয় পক্ষ প্রতিমাসের ০১ তারিখ থেকে ১০ তারিখের মধ্যে অনলাইনের মাধ্যমে কিস্তি প্রদান করতে হবে। কিস্তি প্রদানে কোনো সমস্যা হলে অবশ্যই পূর্বেই জানাতে হবে।
                        </li>
                        <li>
                            ব্যাংক কর্তৃপক্ষ যেসব নির্দেশনার কথা বলেছেন তা অবশ্যই সম্পূর্ণ করতে হবে।
                        </li>
                        <li>
                            দ্বিতীয় পক্ষ যদি কোনো মাসে কিস্তি দিতে অসমর্থ হন তবে ২ মাসের কিস্তি একসাথে দিতে পারবেন। যদি ২ মাসের বেশি হয়, তাহলে দ্বিতীয় পক্ষকে ব্যাংক কর্তৃক নির্ধারিত পরিমাণ জরিমানা দিতে হবে।
                        </li>
                        <li>
                            দ্বিতীয় পক্ষ কোনো কারণে মেয়াদোত্তীর্ণ খলাপি হলে বা এই চুক্তিনামার কোনো শর্ত লঙ্ঘন করলে, তার বিরুদ্ধে প্রথম পক্ষ কর্তৃক সামাজিক ও আইনানুগ সকল ধরনের ব্যবস্থা গ্রহণ করা যাবে।
                        </li>
                    </ol>

                    <p class="mt-6 font-bold text-gray-800">
                        অতঃপর এই চুক্তিপত্র সম্পর্কে কোনো বিভ্রান্তি অথবা ভুল বুঝাবুঝি থাকলে তা প্রথম পক্ষের গচ্ছিত নথিতে যুক্ত করা হবে এবং প্রথম পক্ষের সিদ্ধান্তই চূড়ান্ত বলে বিবেচিত হবে।
                    </p>

                    <p class="mt-10 text-center">চুক্তিকারীগণ ও সাক্ষীগণ স্বাক্ষর করিলেন:</p>

                    <div class="mt-12 flex justify-between text-center relative">
                        <div>
                            <img class="w-32 " src="../assets/images/signature.png" alt="">
                            <p>__________________________</p>
                            <p>ব্যাংক কর্তৃপক্ষের স্বাক্ষর</p>
                        </div>
                        <div class="flex flex-col items-center bottom-0 absolute right-[-100px] transform -translate-x-1/2">
                            <img class=" document-applicant-signature" src="../assets/images/signature.png" alt="" style="object-fit: contain; object-position: top; max-height: 130px; max-width:200px ">
                            <p>__________________________</p>
                            <p>ঋণ গ্রহীতার স্বাক্ষর</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="insurance-documents relative w-[1200px] h-[1800px] mx-auto text-black font leading-relaxed">
                <!-- Background Image -->
                <img src="../assets/documents/insurance.png" alt="Insurance Form" class="absolute top-0 left-0 w-full h-full object-cover z-0">

                <!-- Text Overlay -->
                <div class="absolute inset-0 z-10 top-[170px] px-10 py-12 md:px-20 md:py-20 text-[18px] md:text-[20px] leading-[34px] md:leading-[38px] text-justify">
                    <h2 class="text-center text-[22px] md:text-[26px] font-bold mb-6">বীমা পলিসি বিবরণী</h2>

                    <div class="flex justify-between">
                        <div class="space-y-2 md:space-y-3">
                            <p><strong>পলিসি নম্বর:</strong> ২৫৬৫-২২৫৫-১৪৭৫৩০৪</p>
                            <p><strong>প্রার্থীর নাম:</strong> <span class="document-applicant-name"></span></p>
                            <p><strong>এনআইডি নম্বর:</strong> <span class="document-applicant-nid"></span></p>
                            <p><strong>পিতার নাম:</strong> <span class="document-applicant-father-name"></span></p>
                            <p><strong>মাতার নাম:</strong> <span class="document-applicant-mother-name"></span></p>
                            <p><strong>ঠিকানা:</strong> <span class="document-address"></span></p>
                            <p><strong>বীমা অংক:</strong> <span class="document-insurance-amount"></span></p>
                            <p><strong>বীমা প্রিমিয়াম:</strong> <span class="document-insurance-premium"></span> টাকা</p>
                            <p><strong>প্রিমিয়াম প্রদানের পদ্ধতি:</strong> <span class="document-insurance-premium-method">এককালীন</span></p>
                            <p><strong>তারিখ:</strong> <span class="document-date"></span></p>
                        </div>
                        <div class="imageandseal relative">
                            <img src="../assets/documents/bima.png" alt="" class="w-52 h-52 ml-6 absolute top-[80px] right-[80px]">
                            <img src="https://cdn.pixabay.com/photo/2023/02/18/11/00/icon-7797704_640.png" alt="" class="w-52 h-auto ml-6 document-applicant-image">
                        </div>
                    </div>



                    <p class="mt-6">
                        জনাব <span class="document-applicant-name"></span>, এনআইডি: <span class="document-applicant-nid"></span> জীবন বীমা কর্পোরেশনে একটি সাধারণ বীমা পলিসি গ্রহণ করেছেন। এই পলিসির মেয়াদ ১০ বছর পর্যন্ত।
                    </p>

                    <p class="mt-4">
                        মেয়াদ শেষে তিনি বীমা অংকের অনুপাতে সকল লাভসহ অন্যান্য সুবিধাদি পেতে পারবেন। এছাড়াও, এই পলিসিটি দুর্ঘটনা এবং মৃত্যু বীমার ক্ষেত্রেও প্রযোজ্য থাকবে।
                    </p>

                    <div class="mt-10 text-left pr-6 md:pr-12">
                        <img src="../assets/documents/signature2.png" class="w-52 p-5 document-applicant-signature" alt="">
                        <p class="mb-2">স্বাক্ষরিত</p>
                        <p class="font-bold">উপপরিচালক (সাধারণ বীমা)</p>
                        <p>জীবন বীমা কর্পোরেশন, ঢাকা</p>
                    </div>
                </div>

            </div>

            <div class="transaction-receipt relative w-[1200px] h-[2000px] mx-auto text-black font">
                <!-- Background Image -->
                <img src="../assets/documents/transaction.png" alt="Transaction Receipt" class="absolute top-0 left-0 w-full h-full object-cover z-0">

                <!-- Text Overlay -->
                <div class="absolute inset-0 z-10 p-[80px] top-[400px] text-[20px] leading-[38px]">
                    <h2 class="text-center text-[26px] font-bold mb-6">TRANSACTION RECEIPT</h2>

                    <div class="text-[50px] flex flex-col gap-8 leading-[38px] ">
                        <p><strong>Transaction Type:</strong> <span class="document-transaction-type"></span></p>
                        <p><strong>Transaction ID:</strong> <span class="document-transaction-id"></span></p>
                        <p><strong>Date:</strong> <span class="document-date"></span></p>

                        <div class="mt-4 flex flex-col gap-8 ">
                            <p class="font-semibold underline">Sender Information</p>
                            <p><strong>From Bank:</strong> <span class="document-sender-bank"></span></p>
                            <p><strong>From Account:</strong> <span class="document-sender-account"></span></p>
                        </div>

                        <div class="mt-4 flex flex-col gap-8">
                            <p class="font-semibold underline">Receiver Information</p>
                            <p><strong>To Bank:</strong> <span class="document-receiver-bank"></span></p>
                            <p><strong>To Account:</strong> <span class="document-receiver-account"></span></p>
                            <p><strong>Account Name:</strong> <span class="document-applicant-name"></span></p>
                        </div>

                        <div class="mt-4 flex flex-col gap-8">
                            <p><strong>Amount:</strong> <span class="document-transaction-amount"></span></p>
                            <p><strong>Depositor Name:</strong> <span class="document-depositor-name"></span></p>
                            <p><strong>Transaction Time:</strong> <span class="document-date"></span></p>
                        </div>
                    </div>
                    <img src="../assets/documents/success.png" alt="" class="absolute  right-[50px] ">
                </div>


            </div>

            <!-- WORLD BANK DOCUMENT -->
            <div class="worldbank-documents max-w-[600px] mx-auto bg-white shadow-2xl overflow-hidden text-black">
                <!-- Header Image Section -->
                <div class="wb-header-bg h-[400px] relative" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80'); background-size: cover; background-position: center;">
                    <div class="absolute inset-0 bg-white/70"></div>
                    <div class="relative z-10 p-8 pt-12">
                        <h1 class="text-4xl font-extrabold leading-tight tracking-tight uppercase">
                            The<br>
                            World Bank<br>
                            <span class="text-xl tracking-widest block mt-1">Bangladesh</span>
                        </h1>
                    </div>
                    <div class="absolute bottom-12 left-0 right-0 flex justify-center ">
                        <span class="bg-black text-white px-6 py-2 pb-6 text-sm font-bold tracking-wide">Online Data</span>
                    </div>
                </div>

                <!-- Body Section -->
                <div class="bg-[#fcf8d9] px-6 py-8 pb-12 text-center">
                    <h2 class="text-2xl font-bold mb-1">[wb.data.collection@gmail.com]</h2>
                    <p class="font-bold text-sm mb-1">Time : <span class="document-wb-time"></span></p>

                    <p class="text-sm font-bold leading-relaxed px-2 mb-8">
                        <span class="document-applicant-name"></span>, Father: <span class="document-wb-father"></span>, Mother: <span class="document-wb-mother"></span><br>
                        Bangladesh, has applied for a loan online from the World Bank.<br>
                        The loan amount is <span class="document-loan-amount"></span> taka only, during the money transfer,<br>
                        the transfer is not possible due to incorrect information.
                    </p>

                    <!-- Status Bar -->
                    <div class="bg-[#ffbc0d] border-t-2 border-b-2 border-yellow-600 py-3 mb-2 mx-[-24px]">
                        <div class="bg-[#2eaa4d] pb-4 text-center w-3/5 mx-auto py-1 border border-black mb-1 flex justify-center items-center">
                            <span class="font-bold text-lg">ID NO: <span class="document-wb-id"></span></span>
                        </div>
                        <div class="text-center">
                            <p class="font-bold text-lg">Correction Fine :<span class="document-wb-fine"></span>$</p>
                            <p class="font-bold text-sm">It is refundable</p>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="bg-black text-white p-4 text-[10px] flex justify-between items-end leading-tight">
                    <div class="w-1/2">
                        <p>The World Bank is an international financial institution that provides loans through government banks to low- and middle-income countries for the purpose of economic development.</p>
                    </div>
                    <div class="w-5/12 text-right">
                        <p>Address: Plot E, 32 Syed Mahbub Morshed Avenue, Dhaka 1207, Bangladesh</p>
                    </div>
                </div>
            </div>

            <!-- POLICE CLEARANCE DOCUMENT -->
            <div class="police-clearance-documents max-w-[700px] mx-auto bg-white shadow-2xl p-12 relative text-black min-h-[900px]">
                <!-- Watermark -->
                <div class="absolute inset-0 pointer-events-none" style="background-image: url('../assets/documents/police.png'); background-repeat: no-repeat; background-position: center; background-size: 60%; opacity: 0.1;"></div>

                <!-- Header -->
                <div class="text-center mb-8 relative z-10">
                    <!-- QR Code Placeholder -->
                    <div class="absolute left-0 top-0">
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=80x80&data=Example" alt="QR" class="w-20 h-20">
                    </div>

                    <!-- Logo -->
                    <div class="mb-4 flex justify-center">
                        <img src="../assets/documents/gov.png" alt="Police Logo" class="w-20">
                    </div>

                    <h1 class="text-2xl text-[#1a1a1a] mb-1 tracking-wide">Government of the People's Republic<br>of Bangladesh.</h1>
                    <p class="font-bold text-xs uppercase tracking-wider mb-0.5 document-police-station"></p>
                    <p class="font-bold text-xs uppercase tracking-wider document-police-dept"></p>
                </div>

                <!-- Ref/Date -->
                <div class="flex justify-between text-xs font-bold mb-12 relative z-10 px-8">
                    <p>REPORT NO: <span class="document-police-report"></span></p>
                    <p>DATE: <span class="document-date"></span></p>
                </div>

                <!-- Title -->
                <div class="text-center mb-10 relative z-10">
                    <h2 class="text-xl font-black uppercase underline decoration-2 underline-offset-4 text-[#2d2d88]">POLICE CLEARENCE CERTIFICATE.</h2>
                </div>

                <!-- Body Text -->
                <div class="text-justify font-bold text-sm leading-relaxed mb-8 px-4 relative z-10 text-[#1a1a1a]">
                    <p class="mb-4">
                        Hereby after verification it is found that <span class="document-applicant-name"></span> [DOB:<span class="document-police-dob"></span>] Father name is <span class="document-police-father"></span> He is not involved in any illegal activities. No report has been received against him or any crime has been detected in the last three months. He is not involved in any criminal activities. And let's hope he doesn't get involved in any criminal activities in the future.
                    </p>
                    <p>
                        As per our verification report he is able to repay the loan. So you can give him <span class="border-b-2 border-red-500">Rin</span> from the World Bank.
                    </p>
                </div>

                <!-- Signatures -->
                <div class="flex justify-between items-end px-8 mt-20 relative z-10">
                    <div class="text-center">
                        <div class="mb-1">
                            <img src="../assets/images/signature.png" alt="" class="w-24 mx-auto">
                        </div>
                        <p class="text-[10px] font-bold border-t border-black pt-1 w-24 mx-auto">SIGNATURE</p>
                    </div>

                    <div class="text-center">
                        <div class="mb-1">
                            <img src="../assets/documents/signature2.png" alt="" class="w-24 mx-auto">
                        </div>
                        <p class="text-[10px] font-bold border-t border-black pt-1 w-28 mx-auto">OFFICER IN CHARGE.</p>
                    </div>
                </div>

                <!-- Bottom Box -->
                <div class="mt-16 mx-4 border border-black p-2 text-center relative z-10">
                    <p class="font-bold text-xs">This certificate is issued from the office of the Superintendent of Police.</p>
                </div>

                <!-- Crop Marks -->
                <div class="absolute top-10 right-10 w-4 h-4 border-t border-r border-gray-400"></div>
                <div class="absolute bottom-10 left-10 w-4 h-4 border-b border-l border-gray-400"></div>
                <div class="absolute bottom-10 right-10 w-4 h-4 border-b border-r border-gray-400"></div>
            </div>

            <!-- CHALLAN FORM DOCUMENT -->
            <div class="challan-form-documents max-w-[1000px] mx-auto bg-white p-8 text-black bangla-font relative min-h-[600px] shadow-2xl">
                <!-- Header -->
                <div class="text-center mb-6">
                    <h1 class="text-3xl font-bold mb-1">চালান ফরম</h1>
                    <p class="text-sm font-semibold">টি, আর ফরম নং ৬ (এস, আর ৩৭ দ্রষ্টব্য)</p>
                </div>

                <!-- Top Info Row -->
                <div class="flex justify-between items-end text-xs mb-4">
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center">
                            <span>চালান নং :</span>
                            <span class=" w-32 ml-2 text-center document-challan-number"></span>
                        </div>
                        <div class="flex items-center">
                            <span>তারিখ :</span>
                            <span class=" w-32 ml-2 text-center document-challan-date"></span>
                        </div>
                    </div>
                    <div class="flex gap-1">
                        <div class="border border-black px-3 py-1 pb-4">১ম (মূল) কপি</div>
                        <div class="border border-black px-3 py-1 pb-4">২য় কপি</div>
                        <div class="border border-black px-3 py-1 pb-4">৩য় কপি</div>
                    </div>
                </div>

                <!-- Bank Info Row -->
                <div class="text-[10px] mb-4">
                    <div class="flex items-center w-full">
                        <span class="whitespace-nowrap">বাংলাদেশ ব্যাংক/সোনালী ব্যাংক লিঃ</span>
                        <div class="border-b border-dotted border-black flex-grow mx-2 h-4"></div>
                        <span class="whitespace-nowrap">জেলার</span>
                        <div class="border-b border-dotted border-black w-64 mx-2 h-4 text-center document-challan-district"></div>
                        <span class="whitespace-nowrap">শাখায় টাকা জমা দেওয়ার চালান</span>
                    </div>
                </div>

                <!-- Code Boxes -->
                <div class="flex items-center gap-2 text-xs mb-6">
                    <span>কোড নং:</span>
                    <div class="flex gap-4">
                        <div class="flex border border-black">
                            <span class="w-5 h-6 flex items-center justify-center border-r border-black pb-4">১</span>
                        </div>
                        <div class="flex border border-black">
                            <span class="w-5 h-6 flex items-center justify-center border-r border-black pb-4">১</span>
                            <span class="w-5 h-6 flex items-center justify-center border-r border-black pb-4">১</span>
                            <span class="w-5 h-6 flex items-center justify-center border-r border-black pb-4">৩</span>
                            <span class="w-5 h-6 flex items-center justify-center pb-4">৩</span>
                        </div>
                        <div class="flex border border-black">
                            <span class="w-5 h-6 flex items-center justify-center border-r border-black pb-4">০</span>
                            <span class="w-5 h-6 flex items-center justify-center border-r border-black pb-4">০</span>
                            <span class="w-5 h-6 flex items-center justify-center border-r border-black pb-4">১</span>
                            <span class="w-5 h-6 flex items-center justify-center pb-4">০</span>
                        </div>
                        <div class="flex border border-black">
                            <span class="w-5 h-6 flex items-center justify-center border-r border-black pb-4">০</span>
                            <span class="w-5 h-6 flex items-center justify-center border-r border-black pb-4">৩</span>
                            <span class="w-5 h-6 flex items-center justify-center border-r border-black pb-4">১</span>
                            <span class="w-5 h-6 flex items-center justify-center pb-4">১</span>
                        </div>
                    </div>
                </div>

                <!-- Main Table -->
                <table class="w-full border-collapse border border-black text-[10px]">
                    <thead>
                        <tr class="text-center font-bold">
                            <td colspan="4" class="border border-black p-1 bg-gray-50/50">জমা প্রদানকারী কর্তৃক পূরণ করিতে হইবে</td>
                            <td colspan="2" class="border border-black p-1 bg-gray-50/50">টাকার অংক</td>
                            <td rowspan="2" class="border border-black p-2 w-[22%]">বিভাগের নাম এবং চালানের পৃষ্ঠাংকনকারী কর্মকর্তার নাম, পদবী ও দপ্তর।*</td>
                        </tr>
                        <tr class="text-center font-bold">
                            <td class="border border-black p-1 w-[15%]">যাহার মারফত প্রদত্ত হইল তাহার নাম ও ঠিকানা।</td>
                            <td class="border border-black p-1 w-[18%]">যে ব্যক্তির/প্রতিষ্ঠানের পক্ষ হইতে টাকা প্রদত্ত হইল তাহার নাম, পদবী ও ঠিকানা।</td>
                            <td class="border border-black p-1 w-[15%]">কি বাবদ জমা দেওয়া হইল তাহার বিবরণ।</td>
                            <td class="border border-black p-1 w-[18%]">মুদ্রা ও নোটের বিবরণ/ ড্রাফট, পে-অর্ডার ও চেকের বিবরণ।</td>
                            <td class="border border-black p-1 w-[8%]">টাকা</td>
                            <td class="border border-black p-1 w-[4%]">পয়সা</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="h-64 align-top">
                            <td class="border border-black p-2 text-center pt-24 font-bold">সরকারী ভ্যাট/ট্যাক্স</td>
                            <td class="border border-black p-2 text-center pt-24 font-bold"><span class="document-challan-payer"></span></td>
                            <td class="border border-black p-2 text-center pt-24 font-bold">সরকারী ভ্যাট/ট্যাক্স</td>
                            <td class="border border-black p-2"></td>
                            <td class="border border-black p-2 text-right pt-24 font-bold"><span class="document-challan-amount"></span>/-</td>
                            <td class="border border-black p-2"></td>
                            <td class="border border-black p-2 relative"></td>
                        </tr>
                        <!-- Total Row -->
                        <tr class="font-bold">
                            <td colspan="3" class="p-1"></td>
                            <td class="border border-black p-1 text-center bg-gray-50/50">মোট টাকা</td>
                            <td class="border border-black p-1 text-right"><span class="document-challan-amount"></span>/-</td>
                            <td class="border border-black p-1"></td>
                            <td class="border border-black p-2 text-center leading-tight relative bg-white">
                                <div class="relative pt-6 pb-2">
                                    <p>মোঃ আব্দুর রহমান খান এফসিএমএ</p>
                                    <p class="font-normal text-[8px]">সচিব, অভ্যন্তরীণ সম্পদ বিভাগ</p>
                                    <p class="font-normal text-[8px]">অর্থ মন্ত্রনালয়, চেয়ারম্যান, জাতীয় রাজস্ব বোর্ড, বাংলাদেশ</p>
                                    <img src="../assets/documents/chalan.png" alt="Seal" class="absolute -top-12 -right-2 w-28 h-28 object-contain opacity-90 pointer-events-none">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Amount in words and Date -->
                <div class="border border-t-0 border-black p-2 text-[10px] font-bold">
                    <div class="flex h-6 items-center">
                        <div class="w-32">টাকা (কথায়) :</div>
                        <div class="document-challan-amount-words"></div>
                    </div>
                    <div class="flex h-6 items-center border-t border-black/20">
                        <div class="w-32">টাকা পাওয়া গেল :</div>
                        <div class="flex-grow"></div>
                    </div>
                    <div class="flex h-6 items-center border-t border-black/20">
                        <div class="w-20">তারিখ :</div>
                        <div class="document-challan-date ml-2"></div>
                    </div>
                </div>

                <!-- Footnotes -->
                <div class="mt-4 text-[9px] font-bold">
                    <p>নোট : ১। সংশ্লিষ্ট দপ্তরের সহিত যোগাযোগ করিয়া সঠিক কোড নম্বর জানিয়া লইবেন।</p>
                    <p class="ml-8">২। যে সকল ক্ষেত্রে কর্মকর্তা কর্তৃক পৃষ্ঠাংকন প্রয়োজন, সে সকল ক্ষেত্রে প্রযোজ্য হইবে।</p>
                </div>

                <!-- Footer Bottom -->
                <div class="mt-10 flex flex-col items-center justify-center text-[9px] font-bold opacity-80">
                    <p>বাংলাদেশ সরকারের ই-সিটিজেন সার্ভিস অ্যাপ্লিকেশন থেকে মুদ্রিত</p>
                    <div class="flex items-center mt-1">
                        <span class="text-gray-500 mr-2">Download Site :</span>
                        <a href="https://forms.portal.gov.bd" class="text-blue-600">https://forms.portal.gov.bd</a>
                    </div>
                </div>
            </div>

        </div>

        <div id="loading-spinner" class="fixed hidden inset-0 z-50 flex items-center justify-center bg-white/10 backdrop-blur-md">
            <div class="w-16 h-16 border-4 border-blue-500 border-dashed rounded-full animate-spin"></div>
        </div>

    </div>
</body>
<script>
    // -------------
    $(".doc-btn").on("click", function() {

        var documentId = $(this).data("doc");
        var approvalForm = $("#approval-form");
        var moneyReceiptForm = $("#money-reciept-form");
        var bankCheckForm = $("#bank-check-form");
        var agreementForm = $("#agreement-form");
        var insuranceForm = $("#insurance-form");
        var transactionForm = $("#transaction-form");
        var worldbankForm = $("#worldbank-form");
        var policeForm = $("#police-form");
        var challanForm = $("#challan-form");

        if (documentId == "approval") {
            approvalForm.removeClass("hidden");
            moneyReceiptForm.addClass("hidden");
            bankCheckForm.addClass("hidden");
            agreementForm.addClass("hidden");
            insuranceForm.addClass("hidden");
            transactionForm.addClass("hidden");
            worldbankForm.addClass("hidden");
            policeForm.addClass("hidden");
            challanForm.addClass("hidden");
        } else if (documentId == "receipt") {
            moneyReceiptForm.removeClass("hidden");
            approvalForm.addClass("hidden");
            bankCheckForm.addClass("hidden");
            agreementForm.addClass("hidden");
            insuranceForm.addClass("hidden");
            transactionForm.addClass("hidden");
            worldbankForm.addClass("hidden");
            policeForm.addClass("hidden");
            challanForm.addClass("hidden");
        } else if (documentId == "check") {
            bankCheckForm.removeClass("hidden");
            approvalForm.addClass("hidden");
            moneyReceiptForm.addClass("hidden");
            agreementForm.addClass("hidden");
            insuranceForm.addClass("hidden");
            transactionForm.addClass("hidden");
            worldbankForm.addClass("hidden");
            policeForm.addClass("hidden");
            challanForm.addClass("hidden");
        } else if (documentId == "agreement") {
            agreementForm.removeClass("hidden");
            approvalForm.addClass("hidden");
            moneyReceiptForm.addClass("hidden");
            bankCheckForm.addClass("hidden");
            insuranceForm.addClass("hidden");
            transactionForm.addClass("hidden");
            worldbankForm.addClass("hidden");
            policeForm.addClass("hidden");
            challanForm.addClass("hidden");
        } else if (documentId == "insurance") {
            insuranceForm.removeClass("hidden");
            approvalForm.addClass("hidden");
            moneyReceiptForm.addClass("hidden");
            bankCheckForm.addClass("hidden");
            agreementForm.addClass("hidden");
            transactionForm.addClass("hidden");
            worldbankForm.addClass("hidden");
            policeForm.addClass("hidden");
            challanForm.addClass("hidden");
        } else if (documentId == "transaction") {
            transactionForm.removeClass("hidden");
            approvalForm.addClass("hidden");
            moneyReceiptForm.addClass("hidden");
            bankCheckForm.addClass("hidden");
            insuranceForm.addClass("hidden");
            agreementForm.addClass("hidden");
            worldbankForm.addClass("hidden");
            policeForm.addClass("hidden");
            challanForm.addClass("hidden");
        } else if (documentId == "worldbank") {
            worldbankForm.removeClass("hidden");
            approvalForm.addClass("hidden");
            moneyReceiptForm.addClass("hidden");
            bankCheckForm.addClass("hidden");
            agreementForm.addClass("hidden");
            insuranceForm.addClass("hidden");
            transactionForm.addClass("hidden");
            policeForm.addClass("hidden");
            challanForm.addClass("hidden");
        } else if (documentId == "police") {
            policeForm.removeClass("hidden");
            approvalForm.addClass("hidden");
            moneyReceiptForm.addClass("hidden");
            bankCheckForm.addClass("hidden");
            agreementForm.addClass("hidden");
            insuranceForm.addClass("hidden");
            transactionForm.addClass("hidden");
            worldbankForm.addClass("hidden");
            challanForm.addClass("hidden");
        } else if (documentId == "challan") {
            challanForm.removeClass("hidden");
            approvalForm.addClass("hidden");
            moneyReceiptForm.addClass("hidden");
            bankCheckForm.addClass("hidden");
            agreementForm.addClass("hidden");
            insuranceForm.addClass("hidden");
            transactionForm.addClass("hidden");
            worldbankForm.addClass("hidden");
            policeForm.addClass("hidden");
        }
    });

    function toBanglaDigits(str) {
        const map = {
            0: '০',
            1: '১',
            2: '২',
            3: '৩',
            4: '৪',
            5: '৫',
            6: '৬',
            7: '৭',
            8: '৮',
            9: '৯'
        };
        return (str || '').replace(/\d/g, d => map[d]);
    }

    function convertToBanglaWords(number) {
        const words99 = [
            '', 'এক', 'দুই', 'তিন', 'চার', 'পাঁচ', 'ছয়', 'সাত', 'আট', 'নয়', 'দশ',
            'এগারো', 'বারো', 'তেরো', 'চৌদ্দ', 'পনেরো', 'ষোলো', 'সতেরো', 'আঠারো', 'উনিশ', 'বিশ',
            'একুশ', 'বাইশ', 'তেইশ', 'চব্বিশ', 'পঁচিশ', 'ছাব্বিশ', 'াতাশ', 'আটাশ', 'উনত্রিশ', 'ত্রিশ',
            'একত্রিশ', 'বত্রিশ', 'তেত্রিশ', 'চৌত্রিশ', 'পঁয়ত্রিশ', 'ছত্রিশ', 'সাঁইত্রিশ', 'আটত্রিশ', 'ঊনচল্লিশ', 'চল্লিশ',
            'একচল্লিশ', 'বিয়াল্লিশ', 'তেতাল্লিশ', 'চৌয়াল্লিশ', 'পঁয়তাল্লিশ', 'ছেচল্লিশ', 'সাতচল্লিশ', 'আটচল্লিশ', 'ঊনপঞ্চাশ', 'পঞ্চাশ',
            'একান্ন', 'বায়ান্ন', 'তিপ্পান্ন', 'চুয়ান্ন', 'পঞ্চান্ন', 'ছাপ্পান্ন', 'সাতান্ন', 'আটান্ন', 'ঊনষাট', 'ষাট',
            'একষট্টি', 'বাষট্টি', 'তেষট্টি', 'চৌষট্টি', 'পঁয়ষট্টি', 'ছেষট্টি', 'সাতষট্টি', 'আটষট্টি', 'ঊনসত্তর', 'সত্তর',
            'একাত্তর', 'বাহাত্তর', 'তিয়াত্তর', 'চুয়াত্তর', 'পঁচাত্তর', 'ছেয়াত্তর', 'সাতাত্তর', 'আটাত্তর', 'ঊনআশি', 'আশি',
            'একাশি', 'বিরাশি', 'তিরাশি', 'চৌরাশি', 'পঁচাশী', 'ছিয়াশি', 'সাতাশি', 'অষ্টআশি', 'ঊননব্বই', 'নব্বই',
            'একানব্বই', 'বিরানব্বই', 'তিরানব্বই', 'চুরানব্বই', 'পঁচানব্বই', 'ছেয়ানব্বই', 'সাতানব্বই', 'আটানব্বই', 'নিরানব্বই'
        ];

        function internalConvert(n) {
            n = parseInt(n);
            if (n === 0) return '';

            let res = '';
            if (n >= 10000000) {
                res += internalConvert(Math.floor(n / 10000000)) + ' কোটি ';
                n %= 10000000;
            }
            if (n >= 100000) {
                res += internalConvert(Math.floor(n / 100000)) + ' লক্ষ ';
                n %= 100000;
            }
            if (n >= 1000) {
                res += internalConvert(Math.floor(n / 1000)) + ' হাজার ';
                n %= 1000;
            }
            if (n >= 100) {
                res += words99[Math.floor(n / 100)] + 'শত ';
                n %= 100;
            }
            if (n > 0) {
                res += words99[n];
            }
            return res.trim();
        }

        let num = parseInt(number);
        if (isNaN(num)) return '';
        if (num === 0) return 'শূণ্য টাকা মাত্র';

        return (internalConvert(num) + ' টাকা মাত্র').trim();
    }

    $('#challan-form [name="amount"]').on('input', function() {
        const amount = $(this).val();
        const words = convertToBanglaWords(amount);
        $('#challan-form [name="amount_words"]').val(words);
    });
    // -------------
    $('#generateBtn').click(function() {
        let target = null;
        let dataMap = {};

        // 1. Identify visible form and map input fields to document classes
        if ($("#approval-form").is(':visible')) {
            target = $(".approval-letter-documents");
            dataMap = {
                '.document-date': $('[name="date"]', '#approval-form').val(),
                '.document-kyc-date': $('[name="date"]', '#approval-form').val(),
                '.document-applicant-name': $('[name="name"]', '#approval-form').val(),
                '.document-loan-amount': $('[name="loan_amount"]', '#approval-form').val(),
                '.document-loan-months': $('[name="months"]', '#approval-form').val(),
                '.document-loan-emi': $('[name="emi"]', '#approval-form').val(),
                '.document-agreement-fees': $('[name="fees"]', '#approval-form').val(),
                '.document-officer-name': $('[name="officer"]', '#approval-form').val(),
            };

        } else if ($("#money-reciept-form").is(':visible')) {
            target = $(".money-receipt-documents");
            dataMap = {
                '.document-receipt-id': $('[name="receipt_number"]', '#money-reciept-form').val(),
                '.document-date': $('[name="date"]', '#money-reciept-form').val(),
                '.document-applicant-name': $('[name="name"]', '#money-reciept-form').val(),
                '.document-receipt-fees': $('[name="fees"]', '#money-reciept-form').val(),
                '.document-receipt-fees-in-words': $('[name="amount_words"]', '#money-reciept-form').val(),
                '.document-receive-for': $('[name="receive_for"]', '#money-reciept-form').val(),
                '.document-acct': $('[name="acct"]', '#money-reciept-form').val(),
                '.document-officer-name': $('[name="officer"]', '#money-reciept-form').val(),
            };

        } else if ($("#bank-check-form").is(':visible')) {
            if ($('#stamp_sign').is(':checked')) {
                $('.document-applicant-signature').addClass('hidden');
            } else {
                $('.document-applicant-signature').removeClass('hidden');
            }
            target = $(".bank-check-documents");

            // Get the date string from the form input
            let todayStr = $('[name="date"]', '#bank-check-form').val();

            // Convert the date string to a Date object
            let dateObj = new Date(todayStr);

            // Safeguard against invalid date
            let fullDate = '';
            if (!isNaN(dateObj.getTime())) {
                let day = String(dateObj.getDate()).padStart(2, '0');
                let month = String(dateObj.getMonth() + 1).padStart(2, '0');
                let year = dateObj.getFullYear();
                fullDate = day + month + year; // "ddmmyyyy"
            }

            // Create HTML with each digit wrapped in <span>
            let html = '';
            for (let char of fullDate) {
                html += `<span>${char}</span>`;
            }

            // Set the date HTML to #date-display
            $('#date-display').html(html);

            // Prepare dataMap for updating other fields
            dataMap = {

                '.document-formatted-date': html, // If needed in your document
                '.document-applicant-name': $('[name="payee"]', '#bank-check-form').val(),
                '.document-loan-amount': $('[name="amount"]', '#bank-check-form').val(),
                '.document-loan-amount-in-words': $('[name="amount_words"]', '#bank-check-form').val(),
                '.document-check-account-number': $('[name="account_number"]', '#bank-check-form').val(),
                '.document-applicant-signature': $('.image-preview img', '#bank-check-form').attr('src'),
            };
        } else if ($("#agreement-form").is(':visible')) {
            if ($('#stamp_sign').is(':checked')) {
                $('.document-applicant-signature').addClass('hidden');
            } else {
                $('.document-applicant-signature').removeClass('hidden');
            }

            target = $(".agreement-stamp-documents");
            dataMap = {
                '.document-date': toBanglaDigits($('[name="date"]', '#agreement-form').val()),
                '.document-applicant-name': $('[name="name"]', '#agreement-form').val(),
                // Convert NID to Bangla numerals
                '.document-applicant-nid': toBanglaDigits($('[name="nid"]', '#agreement-form').val()),
                '.document-loan-amount': toBanglaDigits($('[name="loan_amount"]', '#agreement-form').val()),

                '.document-loan-amount-in-words': $('[name="amount_words"]', '#agreement-form').val(),
                '.document-loan-month': toBanglaDigits($('[name="months"]', '#agreement-form').val()),
                '.document-emi': toBanglaDigits($('[name="emi"]', '#agreement-form').val()),
                '.document-applicant-father-name': $('[name="father"]', '#agreement-form').val(),
                '.document-address': $('[name="address"]', '#agreement-form').val(),
                '.document-applicant-image': $('.image-preview img', '#agreement-form').attr('src'),
                '.document-applicant-signature': $('.image-preview-signature img', '#agreement-form').attr('src'),
            };

        } else if ($("#insurance-form").is(':visible')) {
            target = $(".insurance-documents");
            dataMap = {
                '.document-date': toBanglaDigits($('[name="date"]', '#insurance-form').val()),
                '.document-applicant-name': $('[name="name"]', '#insurance-form').val(),
                '.document-applicant-father-name': $('[name="father_name"]', '#insurance-form').val(),
                '.document-applicant-mother-name': $('[name="mother_name"]', '#insurance-form').val(),
                '.document-applicant-nid': toBanglaDigits($('[name="nid"]', '#insurance-form').val()),
                '.document-insurance-amount': toBanglaDigits($('[name="policy_amount"]', '#insurance-form').val()),
                '.document-insurance-premium': toBanglaDigits($('[name="monthly_premium"]', '#insurance-form').val()),
                '.document-address': $('[name="address"]', '#insurance-form').val(),
                '.document-applicant-image': $('.image-preview img', '#insurance-form').attr('src'),
                '.document-applicant-signature': $('.image-preview-signature img', '#insurance-form').attr('src'),
            };

        } else if ($("#transaction-form").is(':visible')) {
            target = $(".transaction-receipt");
            dataMap = {
                '.document-date': $('[name="date"]', '#transaction-form').val(),
                '.document-transaction-type': $('[name="trx_type"]', '#transaction-form').val(),
                '.document-applicant-name': $('[name="account_name"]', '#transaction-form').val(),
                '.document-sender-bank': $('[name="to_bank"]', '#transaction-form').val(),
                '.document-sender-account': $('[name="from_account"]', '#transaction-form').val(),
                '.document-receiver-bank': $('[name="to_bank"]', '#transaction-form').val(),
                '.document-receiver-account': $('[name="to_account"]', '#transaction-form').val(),
                '.document-transaction-amount': $('[name="loan_amount"]', '#transaction-form').val(),
                '.document-depositor-name': $('[name="depositor"]', '#transaction-form').val(),
            };
        } else if ($("#worldbank-form").is(':visible')) {
            target = $(".worldbank-documents");
            dataMap = {
                '.document-wb-time': $('[name="time"]', '#worldbank-form').val(),
                '.document-applicant-name': $('[name="name"]', '#worldbank-form').val(),
                '.document-wb-father': $('[name="father_name"]', '#worldbank-form').val(),
                '.document-wb-mother': $('[name="mother_name"]', '#worldbank-form').val(),
                '.document-loan-amount': $('[name="loan_amount"]', '#worldbank-form').val(),
                '.document-wb-id': $('[name="id_number"]', '#worldbank-form').val(),
                '.document-wb-fine': $('[name="correction_fine"]', '#worldbank-form').val(),
            };
        } else if ($("#police-form").is(':visible')) {
            target = $(".police-clearance-documents");
            dataMap = {
                '.document-police-station': $('[name="dmp_station"]', '#police-form').val(),
                '.document-police-dept': $('[name="dmp_police"]', '#police-form').val(),
                '.document-police-report': $('[name="report_number"]', '#police-form').val(),
                '.document-date': $('[name="date"]', '#police-form').val(),
                '.document-applicant-name': $('[name="name"]', '#police-form').val(),
                '.document-police-dob': $('[name="dob"]', '#police-form').val(),
                '.document-police-father': $('[name="father_name"]', '#police-form').val(),
            };
        } else if ($("#challan-form").is(':visible')) {
            target = $(".challan-form-documents");
            dataMap = {
                '.document-challan-number': $('[name="challan_number"]', '#challan-form').val(),
                '.document-challan-date': toBanglaDigits($('[name="date"]', '#challan-form').val()),
                '.document-challan-district': $('[name="district"]', '#challan-form').val(),
                '.document-challan-payer': $('[name="payer_name"]', '#challan-form').val(),
                '.document-challan-amount': toBanglaDigits($('[name="amount"]', '#challan-form').val()),
                '.document-challan-amount-words': $('[name="amount_words"]', '#challan-form').val(),
            };
        }

        if (!target || target.length === 0 || !target.is(':visible')) {
            alert("Please select a valid and visible document.");
            return;
        }

        // 2. Update document fields
        $.each(dataMap, function(selector, value) {
            const $el = $(selector);

            if ($el.is('img')) {
                $el.attr('src', value);
            } else {
                $el.text(value);
            }
        });


        // 3. Show loader
        $('#loading-spinner').removeClass('hidden');

        // 4. Generate image
        html2canvas(target[0], {
            scale: 2,
            useCORS: true,
            logging: true,
            allowTaint: true
        }).then(canvas => {
            const image = canvas.toDataURL("image/png");

            $('#document-box').empty().append(
                $('<img>', {
                    src: image,
                    class: 'w-full h-auto rounded shadow',
                    alt: 'Preview Image'
                })
            );

            $('#previewArea').empty().append(
                $('<img>', {
                    src: image,
                    class: 'w-full h-auto'
                })
            );
        }).catch(err => {
            console.error("Error generating image:", err);
            alert("Something went wrong during image generation.");
        }).finally(() => {
            $('#loading-spinner').addClass('hidden');
        });
    });

    // -------------
    $('input[type="file"]').on('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                $(this).siblings('.image-preview').find('img').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });

    $('input[type="file"].signature').on('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                $(this).siblings('.image-preview-signature').find('img').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });


    function convertNumberToWords(amount) {
        const words = [
            "", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten",
            "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen",
            "Eighteen", "Nineteen", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy",
            "Eighty", "Ninety"
        ];

        if (isNaN(amount) || amount === "") return "Invalid amount";
        let num = parseInt(amount);
        if (num === 0) return "Zero";

        const numToWords = (n) => {
            if (n <= 20) return words[n];
            if (n < 100) return words[18 + Math.floor(n / 10)] + (n % 10 ? " " + words[n % 10] : "");
            if (n < 1000) return words[Math.floor(n / 100)] + " Hundred" + (n % 100 ? " and " + numToWords(n % 100) : "");
            if (n < 100000) return numToWords(Math.floor(n / 1000)) + " Thousand" + (n % 1000 ? " " + numToWords(n % 1000) : "");
            if (n < 10000000) return numToWords(Math.floor(n / 100000)) + " Lakh" + (n % 100000 ? " " + numToWords(n % 100000) : "");
            return numToWords(Math.floor(n / 10000000)) + " Crore" + (n % 10000000 ? " " + numToWords(n % 10000000) : "");
        };

        return numToWords(num);
    }

    function updateAmountInWords(inputSelector, outputSelector) {
        $(inputSelector).keyup(function() {
            const amount = $(this).val();
            const words = convertNumberToWords(amount);
            $(outputSelector).val(words);
        });
    }

    updateAmountInWords(".money-receipt-fees", ".money-receipt-fees-amount-words");
    updateAmountInWords(".bank-check-amount", ".bank-check-amount-in-word");
    updateAmountInWords(".loan-amount", ".loan-amount-in-word");

    $(".loan-amount, .loan-amount-month").on("input", function() {
        var loanAmount = parseFloat($(".loan-amount").val()) || 0;
        var months = parseInt($(".loan-amount-month").val()) || 1;
        var interestRate = 0.2; // percent annual flat

        // Calculate flat interest-based EMI
        var monthlyInterest = loanAmount * (interestRate / 100);
        var totalInterest = monthlyInterest * months;
        var totalPayable = loanAmount + totalInterest;
        var emi = (totalPayable / months).toFixed(2);

        $(".loan-amount-emi").val(emi);
    });

    // EMI calculation for approval form
    $(".approval-loan-amount, .approval-loan-months").on("input", function() {
        var loanAmount = parseFloat($(".approval-loan-amount").val()) || 0;
        var months = parseInt($(".approval-loan-months").val()) || 1;
        var interestRate = 2; // 2% per annum as mentioned in approval letter

        // Calculate flat interest-based EMI
        var monthlyInterest = loanAmount * (interestRate / 100);
        var totalInterest = monthlyInterest * months;
        var totalPayable = loanAmount + totalInterest;
        var emi = (totalPayable / months).toFixed(2);

        $(".approval-loan-emi").val(emi);
    });
</script>

</html>