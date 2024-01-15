@extends('frontend.index.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Payment Successful</div>

                <div class="card-body">
                    <p>Thank you for your payment. Your transaction was successful.</p>
                    <p>Transaction ID: {{ $transactionId }}</p>
                    <p>Amount: ${{ $amount }}</p>
                    <!-- Add more details as needed -->
                    {{  }}
                    <!-- You can also provide links or buttons to navigate back to the main page or perform additional actions -->
                    <a href="{{ route('home') }}" class="btn btn-primary">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection