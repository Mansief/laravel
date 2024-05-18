@extends('layout')
@section('title', 'Dashboard')
@section('content')
<div class="container">
    <h1 class="mt-4">Welcome, {{ Auth::user()->name }}</h1>
    <p>Explore the dynamic world of cryptocurrency. Stay updated on the latest developments, trends, and market insights. Discover new opportunities for investment, innovation, and financial empowerment. Whether you're an experienced investor or new to cryptocurrency, our dashboard provides valuable information to navigate this exciting space.</p>

    <div class="row mt-3">
        <div class="col-md-4 border-right"> <!-- Added border-right class here -->
            <h2>Latest Crypto News</h2>
            <!-- CryptoPanic News Widget -->
            <a href="https://cryptopanic.com/" target="_blank" data-news_feed="trending" data-bg_color="#FFFFFF" data-posts_limit="4" data-text_color="#333333" data-link_color="#0091C2" data-header_bg_color="#30343B" data-header_text_color="#FFFFFF" class="CryptoPanicWidget">Latest News</a>
            <script src="https://static.cryptopanic.com/static/js/widgets.min.js"></script>
            <!-- End of CryptoPanic News Widget -->
        </div>
        <div class="col-md-8">
            <h2>Bitcoin Market Chart</h2>
            <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "100%",
  "height": "100%",
  "defaultColumn": "overview",
  "screener_type": "crypto_mkt",
  "displayCurrency": "BTC",
  "colorTheme": "light",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
        </div>
    </div>
</div>
@endsection
