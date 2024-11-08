<?php

use App\Livewire\Tools\ImageToLink\Home as ImageToLink;
use App\Livewire\Tools\GetFbId\Home as GetFbId;
use App\Livewire\Tools\CreateAiImage\Home as CreateAiImage;
use App\Livewire\Tools\CheckDomain\Home as CheckDomain;
use App\Livewire\Tools\AppotaPayment\Home as AppotaPayment;
use App\Livewire\Tools\TextToSpeech\Home as TextToSpeech;
use App\Livewire\Tools\AsciiConverter\Home as AsciiConverter;
use App\Livewire\Tools\JsEncryption\Home as JsEncryption;
use App\Livewire\Tools\PHPEncryption\Home as PHPEncryption;
use App\Livewire\Tools\RandomAvatar\Home as RandomAvatar;
use App\Livewire\Tools\CharacterEncryption\Home as CharacterEncryption;
use App\Livewire\Tools\FontRemoval\Home as FontRemoval;
use App\Livewire\Tools\Get2faCode\Home as Get2faCode;
use App\Livewire\Tools\CheckLiveFb\Home as CheckLiveFb;
use App\Livewire\Tools\DownloadVideoWithoutLogo\Home as DownloadVideoWithoutLogo;
use App\Livewire\Tools\GetColorCode\Home as GetColorCode;
use App\Livewire\Tools\CreateVideoFromImage\Home as CreateVideoFromImage;
use App\Livewire\Tools\FileFormatConverter\Home as FileFormatConverter;
use App\Livewire\Tools\UrlShortener\Home as UrlShortener;
use App\Livewire\Tools\ChartGenerator\Home as ChartGenerator;
use App\Livewire\Tools\SpellCheck\Home as SpellCheck;
use App\Livewire\Tools\ExtractAudioFromVideo\Home as ExtractAudioFromVideo;
use App\Livewire\Tools\CheckInternetSpeed\Home as CheckInternetSpeed;
use App\Livewire\Tools\IPTracking\Home as IPTracking;
use App\Livewire\Tools\PasswordGenerator\Home as PasswordGenerator;
use App\Livewire\Tools\VideoToAudio\Home as VideoToAudio;
use App\Livewire\Tools\CreateGreetingCard\Home as CreateGreetingCard;
use App\Livewire\Tools\TrafficFine\Home as TrafficFine;

use App\Livewire\Products\InteractionBuff\Create as InteractionCreate;
use App\Livewire\Products\InteractionBuff\Orders as InteractionOrders;
use App\Livewire\Products\InteractionBuff\PriceLists as InteractionPriceLists;


use App\Livewire\Products\HostingVps\Home as HostingHome;
use App\Livewire\Products\HostingVps\Detail as HostingDetail;
use App\Livewire\Products\HostingVps\Orders;

use App\Livewire\Products\SellSourceWeb\Home as SellSourceWebHome;
use App\Livewire\Products\SellSourceWeb\Detail as SellSourceWebDetail;
use App\Livewire\Products\SellSourceWeb\Orders as  SellSourceWebOrders ;


use App\Livewire\Products\SellAccount\Home as SellAccountbHome;
use App\Livewire\Products\SellAccount\Detail as SellAccountbDetail;
use App\Livewire\Products\SellAccount\Orders as  SellAccountbOrders ;


use App\Livewire\General\Dashboard\Home as Dashboard ;
use App\Livewire\General\LandingPage\Home as LandingPage ;
use App\Livewire\Products\HostingVps\OrderDetail;



use App\Livewire\Auth\Comingsoon\Home as Comingsoon;
use App\Livewire\Auth\ForgetPassword\Home as ForgetPassword;
use App\Livewire\Auth\Login\Home as Login;
use App\Livewire\Auth\Maintenance\Home as Maintenance;
use App\Livewire\Auth\Register\Home as Register;
use App\Livewire\Auth\ResetPassword\Home as ResetPassword;
use App\Livewire\Auth\Unlock\Home as Unlock;


use Illuminate\Support\Facades\Route;

// Định nghĩa các route

Route::group(['prefix' => '/'], function () {
    Route::get('/landing-page', LandingPage::class)->name(name: 'general.landingpage');
    Route::get('/', Dashboard::class)->name('general.dashboard');
});
Route::group(['prefix' => '/auth'], function () {
    Route::get('/coming-soon', Comingsoon::class)->name('auth.coming-soon');
    Route::get('/forget-password', ForgetPassword::class)->name('auth.forget-password');
    Route::get('/login', Login::class)->name('auth.login');
    Route::get('/maintenance', Maintenance::class)->name('auth.maintenance');
    Route::get('/register', Register::class)->name('auth.register');
    Route::get('/reset-password', ResetPassword::class)->name('auth.reset-password');
    Route::get('/unlock', Unlock::class)->name('auth.unlock');
});



Route::group(['prefix' => 'tools'], function () {
    Route::get('/image-to-link', ImageToLink::class)->name('tools.imageToLink');
    Route::get('/get-fb-id', GetFbId::class)->name('tools.getFbId');
    Route::get('/create-ai-image', CreateAiImage::class)->name('tools.createAiImage');
    Route::get('/check-domain', CheckDomain::class)->name('tools.checkDomain');
    Route::get('/appota-payment', AppotaPayment::class)->name('tools.appotaPayment');
    Route::get('/text-to-speech', TextToSpeech::class)->name('tools.textToSpeech');
    Route::get('/ascii-converter', AsciiConverter::class)->name('tools.asciiConverter');
    Route::get('/js-encryption', JsEncryption::class)->name('tools.jsEncryption');
    Route::get('/php-encryption', PHPEncryption::class)->name('tools.phpEncryption');
    Route::get('/random-avatar', RandomAvatar::class)->name('tools.randomAvatar');
    Route::get('/character-encryption', CharacterEncryption::class)->name('tools.characterEncryption');
    Route::get('/font-removal', FontRemoval::class)->name('tools.fontRemoval');
    Route::get('/get-2fa-code', Get2faCode::class)->name('tools.get2faCode');
    Route::get('/check-live-fb', CheckLiveFb::class)->name('tools.checkLiveFb');
    Route::get('/download-video-without-logo', DownloadVideoWithoutLogo::class)->name('tools.downloadVideoWithoutLogo');
    Route::get('/get-color-code', GetColorCode::class)->name('tools.getColorCode');
    Route::get('/create-video-from-image', CreateVideoFromImage::class)->name('tools.createVideoFromImage');
    Route::get('/file-format-converter', FileFormatConverter::class)->name('tools.fileFormatConverter');
    Route::get('/url-shortener', UrlShortener::class)->name('tools.urlShortener');
    Route::get('/chart-generator', ChartGenerator::class)->name('tools.chartGenerator');
    Route::get('/spell-check', SpellCheck::class)->name('tools.spellCheck');
    Route::get('/extract-audio-from-video', ExtractAudioFromVideo::class)->name('tools.extractAudioFromVideo');
    Route::get('/check-internet-speed', CheckInternetSpeed::class)->name('tools.checkInternetSpeed');
    Route::get('/ip-tracking', IPTracking::class)->name('tools.ipTracking');
    Route::get('/password-generator', PasswordGenerator::class)->name('tools.passwordGenerator');
    Route::get('/video-to-audio', VideoToAudio::class)->name('tools.videoToAudio');
    Route::get('/create-greeting-card', CreateGreetingCard::class)->name('tools.createGreetingCard');
    Route::get('/traffic-fine', TrafficFine::class)->name('tools.trafficFine');
});

Route::group(['prefix' => 'hosting-vps'], function () {
    Route::get('/home', HostingHome::class)->name('products.hosting-vps');
    Route::get('/home/detail/{slug}', HostingDetail::class)->name('products.hosting-vps.detail');
    Route::get('/orders', action: Orders::class)->name('products.hosting-vps.orders');
    Route::get('/orders/{id}', action: OrderDetail::class)->name('products.hosting-vps.orders-detail');
});
Route::group(['prefix' => 'sources-code'], function () {
    Route::get('/home', SellSourceWebHome::class)->name('products.sell-source-web.home');
    Route::get('/home/detail/{slug}', SellSourceWebDetail::class)->name('products.sell-source-web.detail');
    Route::get('/orders', SellSourceWebOrders::class)->name('products.sell-source-web.orders');
});
Route::group(['prefix' => 'interaction'], function () {
    Route::get('/create', InteractionCreate::class)->name('products.interaction.create');
    Route::get('/orders', InteractionOrders::class)->name('products.interaction.orders');
    Route::get('/price-lists', InteractionPriceLists::class)->name('products.interaction.price-lists');
});
Route::group(['prefix' => 'account'], function () {
    Route::get('/list', SellAccountbHome::class)->name('products.sell-account.create');
    Route::get('/list/detail/{slug}', SellAccountbDetail::class)->name('products.sell-account.detail');
    Route::get('/orders', SellAccountbOrders::class)->name('products.sell-account.orders');
});

Route::get('/test-500', function () {
    // Kiểm tra nếu header 'User-Agent' chứa 'view-source'
    if (strpos(request()->header('User-Agent'), 'view-source') !== false) {
        abort(400); // Trả về lỗi 400 nếu đang xem mã nguồn
    }

    abort(500); // Tạo lỗi 500 cho các yêu cầu khác
});