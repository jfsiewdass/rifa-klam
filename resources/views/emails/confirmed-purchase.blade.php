<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Asunto del correo</title>
    <style>
        /* Aquí puedes agregar tus estilos CSS para personalizar el correo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            /* padding: 20px; */
            width: 100%;
        }
        .container {
            margin: 0 auto;
            background-color: #0F1014;
            width: 100%;
            /* padding: 20px; */
            color: white;
        }
        .header {
            text-align: center;
            background-color: #15171C;
            /* padding: 20px; */
            width: 100%;
        }
        .image {
            text-align: center;
            padding: 50px;
        }
        .content {
            
            width: 100%;
            margin-top: 30px;
            text-align: center;
            position: relative;
        }
        .contact {
            text-align: center;
            width: 100%;
            padding: 20px;
            /* background-color: #C0C0C0; */
        }
        .number {
            font-size: 32px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* background-color: rgba(0, 0, 0, 0.5); */
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .total {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <br>
            <h1>!Gracias por comprar con Rifas KLAM¡</h1>
            {{-- <h1>{{ $name }}</h1> --}}
            <img src="{{ asset('assets/images/logo-with-name.png') }}" style="width: 90%;">
        </div>
        <div class="content">
             {{-- {{ dd($voucher->name) }} --}}
            @foreach ($voucher->lotteryNumbers()->get() as $item)
                <div style="text-align: center;position: relative;">

                    <span class="number">{{ $item->number }}</span>
                    <img src="{{ asset('assets/images/ticket-icon.png') }}" alt="Descripción de la imagen" style="width: 50%;">
                </div>
            @endforeach
        </div>
        <div class="total">
            <p>Total Pagado {{ number_format($voucher->amount, 2, ',', '.') }} <strong>Bs.</strong> </p>
        </div>
        <div class="header" class="background-color: #041d5b">
            <h3>!Guarda este comprobante y te contactaremos el día del sorteo si eres uno de los afortunados¡</h3>
        </div>
        <div class="contact">
            <p>{{ $voucher->name.' '.$voucher->surname.' CI:'.$voucher->document }}</p>
            <p>N° de compra: {{ $voucher->unique_id }}</p>
        </div>
    </div>
</body>
</html>