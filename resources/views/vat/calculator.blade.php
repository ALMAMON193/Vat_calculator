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
                <h1>VAT Calculator</h1>
                <form action="{{ route('calculate-vat') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="amount">Amount:</label>
                        <input type="text" name="amount" id="amount" class="form-control"
                            value="{{ old('amount') }}" required>
                        @error('amount')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="vat_rate">VAT Rate (%):</label>
                        <input type="text" name="vat_rate" id="vat_rate" class="form-control"
                            value="{{ isset($vatRate) ? $vatRate : '' }}" required>
                        @error('vat_rate')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary">Calculate</button>
                </form>

                @if (session('result'))
                    <div class="mt-3">
                        <div class="alert alert-success" role="alert">
                            Result: {{ session('result') }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

</body>

</html>
