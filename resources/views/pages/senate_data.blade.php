<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <style>
        .pricingTable {
            background: #fff;
            font-family: 'Open Sans', sans-serif;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            border-radius: 100px 0 80px 0;
        }

        .pricingTable .pricingTable-header {
            background: linear-gradient(#FE052E, #D90732);
            padding: 30px 0 33px;
            margin: 0 0 70px;
            border-radius: 100px 0;
            position: relative;
        }

        .pricingTable .title {
            color: #fff;
            font-size: 25px;
            font-weight: 400;
            text-transform: capitalize;
            margin: 0;
        }

        .pricingTable .price-value {
            color: #ff062e;
            background: #fff;
            width: 85px;
            height: 85px;
            padding: 21px 0;
            border: 5px solid #ff062e;
            border-radius: 50%;
            display: inline-block;
            position: absolute;
            bottom: -40px;
            right: 15px;
        }

        .pricingTable .price-value .amount {
            font-size: 21px;
            font-weight: 700;
            line-height: 21px;
            margin-bottom: 3px;
            display: block;
        }

        .pricingTable .price-value .duration {
            font-size: 11px;
            line-height: 11px;
            font-weight: 400;
            display: block;
        }

        .pricingTable .pricing-content {
            text-align: left;
            padding: 0;
            margin: 0 0 35px;
            list-style: none;
            display: inline-block;
        }

        .pricingTable .pricing-content li {
            color: #aaa;
            font-size: 16px;
            font-weight: 500;
            padding: 0 10px 15px 45px;
            margin: 0 0 14px;
            border-bottom: 1px solid #d2d2d2;
            position: relative;
        }

        .pricingTable .pricing-content li:last-child {
            margin-bottom: 0;
            border-bottom: none;
        }

        .pricingTable .pricing-content li:before {
            content: "\f00c";
            font-family: "Font Awesome 5 free";
            color: #009432;
            font-size: 15px;
            font-weight: 900;
            position: absolute;
            top: 1px;
            left: 15px;
        }

        .pricingTable .pricing-content li.disable:before {
            content: "\f00d";
            color: #EA2027;
        }

        .pricingTable .pricingTable-signup {
            background: linear-gradient(#FE052E, #D90732);
            padding: 25px 0;
            border-radius: 100px 0;
        }

        .pricingTable .pricingTable-signup a {
            color: #fff;
            font-size: 22px;
            font-weight: 700;
            text-transform: uppercase;
            transition: all 0.3s ease 0s;
        }

        .pricingTable .pricingTable-signup a:hover {
            letter-spacing: 2px;
            text-shadow: 3px 3px rgba(0, 0, 0, 0.6);
        }

        .pricingTable.blue .pricingTable-header,
        .pricingTable.blue .pricingTable-signup {
            background: linear-gradient(#034EAF, #003F87);
        }

        .pricingTable.blue .price-value {
            color: #003F87;
            border-color: #003F87;
        }

        .pricingTable.green .pricingTable-header,
        .pricingTable.green .pricingTable-signup {
            background: linear-gradient(#009A8A, #1B867C);
        }

        .pricingTable.green .price-value {
            color: #1B867C;
            border-color: #1B867C;
        }

        @media only screen and (max-width: 990px) {
            .pricingTable {
                margin: 0 0 40px;
            }
        }
    </style>

    <div class="container">
        <h2 style="font-size:30px; font-weight:bolder; color: green; text-align:center;">Senatorial Result Display</h2>

        <div class="demo">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable green">
                            <div class="pricingTable-header">
                                <h3 class="title">CENTRAL SENATORIAL</h3>

                            </div>
                            <ul class="pricing-content">
                                <table class="table table-hover ">
                                    <tbody>
                                        <tr>
                                            <td style="font-weight:bolder; font-size: 20px;">APC</td>
                                            <td style="font-weight:bolder; font-size: 20px; color:red;">
                                                {{ $senate1_apc }}</td>

                                        </tr>
                                        <tr>

                                            <td style="font-weight:bolder; font-size: 20px;">PDP</td>
                                            <td style="font-weight:bolder; font-size: 20px; color:blue;">
                                                {{ $senate1_pdp }}</td>


                                        </tr>
                                        <tr>

                                            <td style="font-weight:bolder; font-size: 20px;">NNPP</td>
                                            <td style="font-weight:bolder; font-size: 20px; color:green;">
                                                {{ $senate1_nnpp }}</td>


                                        </tr>
                                        <tr>

                                            <td style="font-weight:bolder; font-size: 20px;">LP</td>
                                            <td style="font-weight:bolder; font-size: 20px; color:black;">
                                                {{ $senate1_lp }}</td>
                                        </tr>
                                        <tr>

                                            <td style="font-weight:bolder; font-size: 20px;">OTHERS</td>
                                            <td style="font-weight:bolder; font-size: 20px; color:red;">
                                                {{ $senate1_others }}</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </ul>
                            <div class="pricingTable-signup">
                                <a href="{{ route('senate.list.one') }}">Check Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable blue">
                            <div class="pricingTable-header">
                                <h3 class="title">EAST SENATORIAL</h3>

                            </div>
                            <ul class="pricing-content">

                                <table class="table table-hover ">

                                    <tbody>

                                        <tr>
                                            <td style="font-weight:bolder; font-size: 20px;">APC</td>
                                            <td style="font-weight:bolder; font-size: 20px; color:red;">
                                                {{ $senate2_apc }}</td>

                                        </tr>
                                        <tr>

                                            <td style="font-weight:bolder; font-size: 20px;">PDP</td>
                                            <td style="font-weight:bolder; font-size: 20px; color:blue;">
                                                {{ $senate2_pdp }}</td>


                                        </tr>
                                        <tr>

                                            <td style="font-weight:bolder; font-size: 20px;">NNPP</td>
                                            <td style="font-weight:bolder; font-size: 20px; color:green;">
                                                {{ $senate2_nnpp }}</td>


                                        </tr>
                                        <tr>

                                            <td style="font-weight:bolder; font-size: 20px;">LP</td>
                                            <td style="font-weight:bolder; font-size: 20px; color:black;">
                                                {{ $senate2_lp }}</td>
                                        </tr>
                                        <tr>

                                            <td style="font-weight:bolder; font-size: 20px;">OTHERS</td>
                                            <td style="font-weight:bolder; font-size: 20px; color:red;">
                                                {{ $senate2_others }}</td>

                                        </tr>
                                    </tbody>
                                </table>

                            </ul>
                            <div class="pricingTable-signup">
                                <a href="{{ route('senate.list.two') }}">Check Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable">
                            <div class="pricingTable-header">
                                <h3 class="title">WEST SENATORIAL</h3>

                            </div>
                            <ul class="pricing-content">
                                <table class="table table-hover ">

                                    <tbody>

                                        <tr>
                                            <td style="font-weight:bolder; font-size: 20px;">APC</td>
                                            <td style="font-weight:bolder; font-size: 20px; color:red;">
                                                {{ $senate3_apc }}</td>

                                        </tr>
                                        <tr>

                                            <td style="font-weight:bolder; font-size: 20px;">PDP</td>
                                            <td style="font-weight:bolder; font-size: 20px; color:blue;">
                                                {{ $senate3_pdp }}</td>


                                        </tr>
                                        <tr>

                                            <td style="font-weight:bolder; font-size: 20px;">NNPP</td>
                                            <td style="font-weight:bolder; font-size: 20px; color:green;">
                                                {{ $senate3_nnpp }}</td>


                                        </tr>
                                        <tr>

                                            <td style="font-weight:bolder; font-size: 20px;">LP</td>
                                            <td style="font-weight:bolder; font-size: 20px; color:black;">
                                                {{ $senate3_lp }}</td>
                                        </tr>
                                        <tr>

                                            <td style="font-weight:bolder; font-size: 20px;">OTHERS</td>
                                            <td style="font-weight:bolder; font-size: 20px; color:red;">
                                                {{ $senate3_others }}</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </ul>
                            <div class="pricingTable-signup">
                                <a href="{{ route('senate.list.three') }}">Check Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







    </div>

</body>

</html>
