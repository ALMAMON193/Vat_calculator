@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5">VAT Calculator</h1>
        <div class="row">
            <div class="col-md-6">
                <form id="vatForm" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="grossSum" class="form-label">Gross Sum</label>
                        <input type="number" class="form-control" id="grossSum" name="gross_sum" required>
                    </div>
                    <div class="mb-3">
                        <label for="operation" class="form-label">VAT Calculation Operation</label>
                        <select class="form-select" id="operation" name="operation" required>
                            <option value="include">Include VAT in Gross Sum</option>
                            <option value="exclude">Exclude VAT from Gross Sum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="vatPercentage" class="form-label">Tax Percentage</label>
                        <input type="number" class="form-control" id="vatPercentage" name="vat_percentage" value="15"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Calculate</button>
                </form>
            </div>
            <div class="col-md-6">
                <div id="result" class="mt-4"></div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#vatForm').submit(function(e) {
                e.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    url: '{{ route('vat.calculate') }}',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#result').html('VAT Amount: ' + response.vatAmount);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
