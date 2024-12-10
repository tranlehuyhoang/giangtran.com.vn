<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="icon" type="image/x-icon" href="/logo/icon.png" />
    <meta name="robots" content="index, follow" />
    <meta name="google-site-verification" content="XdpPCe9WLWMZA9pEynO-7B7lRoimKZl7qFlCqvZsVlo">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Expires" content="-1">
    <meta name="keywords" content="thiết kế website, hg digital, source code">
    <meta property="og:site_name" content="Hg Digital" />
    <title>Thiết Kế Website Chuyên Nghiệp, Trọn Gói, Uy Tín - HG DIGITAL</title>
    <meta name="description"
        content="Thiết kế website bán hàng, công ty, giao diện đẹp, chuyên nghiệp, hỗ trợ nhiệt tình 24/7. Công ty thiết kế web bán hàng, web doanh nghiệp uy tín, chất lượng, kinh nghiệm nhiều năm. 10+ năm kinh nghiệm. Nhân viên chuyên nghiệp.">
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta name="twitter:url" content="{{ request()->fullUrl() }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title"
        content="Thiết Kế Website Chuyên Nghiệp, Trọn Gói, Uy Tín - HG DIGITAL" />
    <meta property="og:type" content="website" />
    <meta property="og:image"
        content="">
    <meta property="og:description"
        content="Thiết kế website bán hàng, công ty, giao diện đẹp, chuyên nghiệp, hỗ trợ nhiệt tình 24/7. Công ty thiết kế web bán hàng, web doanh nghiệp uy tín, chất lượng, kinh nghiệm nhiều năm. 10+ năm kinh nghiệm. Nhân viên chuyên nghiệp." />
    <meta name="format-detection" content="telephone=no" />
    <link rel="shortcut icon" href="/logo/icon.png" />
    <link rel="apple-touch-icon" href="/logo/icon.png" />
    <link rel="apple-touch-icon-precomposed" href="/logo/icon.png" />
    <meta name="msapplication-TileImage" content="/logo/icon.png" />
    <meta name="revisit-after" content="days" />
    <meta name="geo.region" content="VN" />
    <meta name="geo.placename" content="Hồ Chí Minh" />
    <link rel="dns-prefetch">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@graph": [
                {
                    "@type": "LocalBusiness",
                    "name": "Hg Digital",
                    "url": "https://giangtran.com.vn"
                },
                {
                    "@type": "CreativeWorkSeries",
                    "name": "Thiết Kế Website Chuyên Nghiệp",
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "4.9",
                        "bestRating": "5",
                        "ratingCount": "9999"
                    }
                }
            ]
        }
        </script>
    @livewireStyles

</head>

<body>

    {{ $slot }}
    @livewireScripts
</body>


<!-- Google tag (gtag.js) -->



</html>
