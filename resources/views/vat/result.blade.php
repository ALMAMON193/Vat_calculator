<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div style="margin-top: 30px" class="col-md-12">
                <h1>VAT Rasult</h1>
                <p><b>Amount: </b>${{ $amount }}</p>
                <p><b>VAT Rate:</b> {{ $vatRate }} <b>%</b></p>
                <p><b>VAT Amount: $</b>{{ $vatAmount }}</p>
                <p><b>Total Amount: $ </b>{{ $totalAmount }}</p>
            </div>
        </div>
    </div>

</body>

</html>
