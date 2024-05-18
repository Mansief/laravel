@extends('layout')
@section('title', 'Welcome to ' . config('app.name'))


@section('content')
<div class="border-bottom"><div class="cryptohopper-web-widget" data-id="2"></div></div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="mt-3">Welcome to {{ config('app.name') }}</h1>
            <p>Your go-to platform for staying updated on cryptocurrency markets and trends.</p>
            <hr>
            <h2>Key Features</h2>
            <ul>
                <li>Real-time cryptocurrency market updates</li>
                <li>Aggregated news from top sources</li>
                <li>User-friendly interface for easy navigation</li>
            </ul>
            <hr>
            <h2>User Benefits</h2>
            <p>With CryptoTracker, you can:</p>
            <ul>
                <li>Stay informed about the latest cryptocurrency trends</li>
                <li>Make better investment decisions</li>
                <li>Learn more about blockchain technology</li>
            </ul>

            <hr>
            <h2>Learn More About Cryptocurrency</h2>
            <p>Discover the world of cryptocurrency and blockchain:</p>
            <ul>
                <li><a href="https://en.wikipedia.org/wiki/Cryptocurrency" target="_blank">What is cryptocurrency?</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Blockchain" target="_blank">How does blockchain technology work?</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Decentralized_finance" target="_blank">Benefits of decentralized finance (DeFi)</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <div class="card mt-5">
                <div class="card-header">
                    Join Our Community
                </div>
                <div class="card-body">
                    <p>Sign up now to unlock the full potential of CryptoTracker:</p>
                    <div class="text-center">
                        <a href="{{ route('registration') }}" class="btn btn-primary">Sign Up</a>
                        <p class="mt-2">Already have an account? <a href="{{ route('login') }}">Log In</a></p>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header">Crypto Converter</div>
                <div class="card-body">
                    <div class="cryptohopper-web-widget" data-id="6"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
