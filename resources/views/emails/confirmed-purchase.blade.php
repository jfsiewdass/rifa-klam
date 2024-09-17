<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobante de Rifa KLAM</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0 auto;
        }

        .container {
            background-color: #0F1014;
            padding: 20px;
        }

        .header {
            background-color: #0F1014;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .content {
            background-color: #0F1014;
            padding: 20px;
        }

        .footer {
            background-color: #0F1014;
            color: white;
            padding: 20px;
            text-align: center;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .number {
            font-size: 32px;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
            text-align: center;
        }

        .total,
        .contact {
            margin: 0 auto;
            text-align: center;
            color: #C0C0C0;
        }

        .ticket-container {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .ticket-container span.number {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 32px;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            z-index: 1;
        }
    </style>
</head>

<body>
    <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#0F1014">
        <tr>
            <td align="center">
                <table cellpadding="0" cellspacing="0" border="0" width="600">
                    <tr>
                        <td>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td>
                                        <h1 style="color: white;text-align:center">¡Gracias por comprar con Rifas KLAM!</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') . 'assets/images/logo-with-name.png') }}"
                                            alt="Logo de Rifas KLAM" style="width: 90%;margin: 0 auto">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                    <tr>
                        <td>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td>
                                        <div class="content">
                                            @foreach ($voucher->lotteryNumbers()->get() as $item)
                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <tr>
                                                    <td align="center">
                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                            <tr>
                                                                <td style="text-align: center; padding: 10px;margin:40px;">
                                                                    <div style="padding: 150px 250px;display: inline-block; background-image: url('{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') . 'assets/images/ticket-icon.png') }}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                                                                        <span class="number" style="font-size: 32px; color: white; padding: 5px 10px; border-radius: 5px;">{{ $item->number }}</span>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        
                                                    </td>
                                                </tr>
                                            </table>
                                            
                                            @endforeach
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                    <tr>
                        <td>
                            <div class="total">
                                <p>Total Pagado {{ number_format($voucher->amount, 2, ',', '.') }} <strong>Bs.</strong>
                                </p>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                    <tr>
                        <td>
                            <div class="header">
                                <h3>¡Guarda este comprobante y te contactaremos el día del sorteo si eres uno de los
                                    afortunados!</h3>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                    <tr>
                        <td>
                            <div class="contact">
                                <p>{{ $voucher->name . ' ' . $voucher->surname . ' CI:' . $voucher->document }}</p>
                                <p>N° de compra: {{ $voucher->unique_id }}</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
