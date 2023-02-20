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

    </style>

    <div class="container">
        <h2 style="font-size:30px; font-weight:bolder; color: green; text-align:center;">Federal House of Represenatative
            Result Display</h2>
        <h2 style="font-size:25px; font-weight:bolder; color: red; text-align:center;">Sokoto State</h2>
    </div>

    <div class="container"><a style="margin-below:40px;" href="#" class="btn btn-success btn-sm" role="button">Main
            Page</a>
        <div class="row">
            <div class="col-4">
                <div class="card border-primary mb-4">
                    <div class="card-body ">
                        <h5 class="card-title text-success">BINJI / SILAME</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $binji_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $binji_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $binji_report->sum('nnpp') + $binji_report->sum('lp') + $binji_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-secondary mb-4">
                    <div class="card-body text-secondary">
                        <h5 class="card-title text-success">DANGE / BODINGA /TURETA</h5>

                        <table class="table table-hover ">
                            <tbody>

                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $dange_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $dange_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $dange_report->sum('nnpp') + $dange_report->sum('lp') + $dange_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card border-success mb-4">
                    <div class="card-body text-success">

                        <h5 class="card-title text-success">GORONYO / GADA</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $goronyo_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $goronyo_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $goronyo_report->sum('nnpp') + $goronyo_report->sum('lp') + $goronyo_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </DIV>
        <div class="row">
            <div class="col-4">
                <div class="card border-primary mb-4">
                    <div class="card-body text-primary">
                        <h5 class="card-title text-success">ILLELA / GWADABAWA</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $illela_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $illela_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $illela_report->sum('nnpp') + $illela_report->sum('lp') + $illela_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-secondary mb-4">
                    <div class="card-body text-secondary">
                        <h5 class="card-title text-success">ISAH / SABON BIRNI</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $isah_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $isah_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $isah_report->sum('nnpp') + $isah_report->sum('lp') + $isah_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-success mb-4">
                    <div class="card-body text-success">
                        <h5 class="card-title text-success">KEBBE / TAMBUWAL</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $kebbe_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $kebbe_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $kebbe_report->sum('nnpp') + $kebbe_report->sum('lp') + $kebbe_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>



        <div class="row">
            <div class="col-4">
                <div class="card border-primary mb-4">
                    <div class="card-body text-primary">
                        <h5 class="card-title text-success">KWARE / WAMAKKO</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $kware_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $kware_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $kware_report->sum('nnpp') + $kware_report->sum('lp') + $kware_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-secondary mb-4">
                    <div class="card-body text-secondary">
                        <h5 class="card-title text-success">S.NORTH/ S.SOUTH</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $snorth_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $snorth_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $snorth_report->sum('nnpp') + $snorth_report->sum('lp') + $snorth_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-success mb-4">
                    <div class="card-body text-success">
                        <h5 class="card-title text-success">TANGAZA/ GUDU</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $tangaza_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $tangaza_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $tangaza_report->sum('nnpp') + $tangaza_report->sum('lp') + $tangaza_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card border-primary mb-4">
                    <div class="card-body text-primary">
                        <h5 class="card-title text-success">WURNO / RABAH</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $wurno_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $wurno_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $wurno_report->sum('nnpp') + $wurno_report->sum('lp') + $wurno_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-secondary mb-4">
                    <div class="card-body text-secondary">
                        <h5 class="card-title text-success">YABO / SHAGARI</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $yabo_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $yabo_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $yabo_report->sum('nnpp') + $yabo_report->sum('lp') + $yabo_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-secondary mb-4">
                    <div class="card-body text-secondary"></div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
