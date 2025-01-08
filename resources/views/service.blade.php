@extends('masterLayout')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 ">

    <div class="main-content p-8 shadow-inner bg-white m-5">
        <div class="mx-auto">
            <div class="mt-4">
                <div class="tab-pane fade show active" id="b2b-services" role="tabpanel" aria-labelledby="b2b-services-tab">
                    <div class="grid grid-cols-3 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 text-center ">
                        <!-- Service Buttons -->
                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.mobile_recharge_service')}}">
                                    <img src="{{asset('asset/img/mobile_recharge.jpeg')}}" alt="Mobile Recharge" class="w-full h-full object-contain">
                                </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Mobile Recharge</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.dth_service')}}">
                                    <img src="{{asset('asset/img/dth.jpg')}}" alt="DTH Recharge" class="w-full h-full object-contain">
                                </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">DTH Recharge</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.bill_payment_service')}}">
                                    <img src="{{asset('asset/img/bill_payment.jpg')}}" alt="Bill Payment" class="w-full h-full object-contain">
                                </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Bill Payment</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.aeps_service')}}">
                                    <img src="{{asset('asset/img/aeps.jpeg')}}" alt="AEPS" class="w-full h-full object-contain">
                                </a>
                            </div>
                            <div class="service-text text-xs lg:font-medium lg:text-base pb-6">AEPS</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.money_transfer_service')}}">
                                    <img src="{{asset('asset/img/money_transfer-1.png')}}" alt="Money Transfer" class="w-full h-full object-contain">
                                </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Money Transfer</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.movetobnk')}}">
                                <img src="{{asset('asset/img/move_to_bank.jpeg')}}" alt="Move To Bank" class="w-full h-full object-contain">
                            </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Move To Bank</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.fund_request_service')}}">
                                    <img src="{{asset('asset/img/fund request.jpeg')}}" alt="Fund Request" class="w-full h-full object-contain">
                                </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Fund Request</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.addharpay')}}">
                                <img src="{{asset('asset/img/aadhar_pay.jpeg')}}" alt="Aadhaar Pay" class="w-full h-full object-contain">
                            </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Aadhaar Pay</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.microatm')}}">
                                <img src="{{asset('asset/img/mini_atm-1.png')}}" alt="Micro ATM" class="w-full h-full object-contain">
                            </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Micro ATM</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.fundtransferpaisa')}}">
                                <img src="{{asset('asset/img/fund_transfer.jpeg')}}" alt="Fund Transfer" class="w-full h-full object-contain">
                            </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Fund Transfer</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.fastag')}}">
                                <img src="{{asset('asset/img/fasttag.jpeg')}}" alt="FastTag" class="w-full h-full object-contain">
                            </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">FastTag</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.upicollection')}}">
                                <img src="{{asset('asset/img/upi_collection.jpeg')}}" alt="UPI Collection" class="w-full h-full object-contain">
                            </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">UPI Collection</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.finocms')}}">
                                <img src="{{asset('asset/img/image.png')}}" alt="Fino CMS" class="w-full h-full object-contain">
                            </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Fino CMS</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.licbillpayment')}}">
                                <img src="{{asset('asset/img/lic_bill_payment.jpeg')}}" alt="LIC Bill Payment" class="w-full h-full object-contain">
                            </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">LIC Bill Payment</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.nsdlapayment')}}">
                                <img src="{{asset('asset/img/nsdl_pan_card.jpeg')}}" alt="NSDL Pan Card" class="w-full h-full object-contain">
                            </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">NSDL Pan Card</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
@endsection