<?php

use App\Http\Controllers\cron\Checkpayment;
use App\Http\Controllers\cron\Transaction;
use App\Http\Middleware\CheckAuth;
use App\Http\Middleware\EnsureUserIsAuthenticated;
use App\Livewire\Template\ApiClient;
use App\Livewire\Page\ChuyenKhoan;
use App\Livewire\Page\DieuKhoan;
use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Page\Home;
use App\Livewire\Template\Hosting\Ca;
use App\Livewire\Page\LandingPage;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\Template\Manage\Cronjob;
use App\Livewire\Template\Manage\Vps;
use App\Livewire\Template\NapCard;
use App\Livewire\Page\Profile;
use App\Livewire\Template\Hosting\VnPremium;
use App\Livewire\Template\Reseller\VnPremium as ResellerVnPremium;
use App\Livewire\Template\Hosting\MuaHosting;
use App\Livewire\Template\Manage\Hosting;
use App\Livewire\Template\Manage\Reseller;
use App\Livewire\Template\KhoMaNguon;
use App\Livewire\Template\RutTien;
use App\Livewire\Template\ThueCron;
use App\Livewire\Template\TiepThiLienKet;
use App\Livewire\Template\VpsStore\CloudVpsVietNam\CloudVpsPro;
use App\Livewire\Template\VpsStore\CloudVpsVietNam\CloudVpsPro\Detail;
use App\Livewire\Template\KhoMaNguon\Detail as KhoMaNguonDetail;
use App\Livewire\Template\Manage\Code;
use App\Livewire\Template\Product\Hosting\Detail as DetailHosting;
use App\Livewire\Page\Invoice as Invoice;
use App\Livewire\Services\Smm\Create as CreateSmm;
use App\Livewire\Services\Smm\Manager as ManagerSmm;
use Illuminate\Support\Facades\Route;

// template

Route::get('/', LandingPage::class)->name('landingpage');
Route::get('/home', Home::class)->name('home');

Route::middleware(CheckAuth::class)->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', action: Register::class)->name('register');
    Route::get('/forgot-password', action: ForgotPassword::class)->name('forgot-password');
    Route::get('/reset-password', action: ResetPassword::class)->name('password.reset');
});


Route::middleware(EnsureUserIsAuthenticated::class)->group(function () {
    Route::get('/profile', Profile::class)->name('profile');
});

Route::get('/services/smm/create', CreateSmm::class)->name('smm.create');
Route::get('/services/smm/manager', ManagerSmm::class)->name('smm.manager');

Route::get('/chuyen-khoan', ChuyenKhoan::class)->name('chuyen-khoan');
Route::get('/hosting/vn-premium', VnPremium::class)->name('vn-premium');
Route::get('/hosting/ca', Ca::class)->name('ca');
Route::get('/mua-hosting/{id}', MuaHosting::class)->name('mua-hosting');
Route::get('/manage/hosting', Hosting::class)->name('hosting');
Route::get('/reseller/vn-premium', ResellerVnPremium::class)->name('reseller-vn-premium');
Route::get('/manage/reseller', Reseller::class)->name('reseller');
Route::get('/vps-store/cloud-vps-viet-nam/cloud-vps-pro', CloudVpsPro::class)->name('cloud-vps-pro');
Route::get('/mua-vps/cloud-vps-viet-nam/cloud-vps-pro/{id}', action: Detail::class)->name('mua-vps-cloud-vps-viet-nam');
Route::get('/manage/vps', Vps::class)->name('vps');
Route::get('/kho-ma-nguon', KhoMaNguon::class)->name('kho-ma-nguon');
Route::get('/mua-ma-nguon/{id}', KhoMaNguonDetail::class)->name('kho-ma-nguon-detail');
Route::get('/manage/code', Code::class)->name('code');
Route::get('/thue-cron', ThueCron::class)->name('thue-cron');
Route::get('/manage/cronjob', Cronjob::class)->name('cronjob');
Route::get('/tiep-thi-lien-ket', action: TiepThiLienKet::class)->name('tiep-thi-lien-ket');
Route::get('/rut-tien', action: RutTien::class)->name('rut-tien');
Route::get('/nap-card', action: NapCard::class)->name('nap-card');
Route::get('/api-client', action: ApiClient::class)->name('api-client');
Route::get('/hoa-don/{id}', action: Invoice::class)->name('hoa-don');
Route::get('/product/hosting/{id}', action: DetailHosting::class)->name('product-hosting');
Route::get('/api/transaction', [Transaction::class, 'transaction'])->name('cron-transaction');
Route::get('/api/checkpayment', [Checkpayment::class, 'checkPayment'])->name('checkpayment');
Route::get('/api/invoice/{invoice_code}', [Checkpayment::class, 'checkInvoice'])->name('checkinvoice');
Route::get('/dieu-khoan', action: DieuKhoan::class)->name('dieu-khoan');

Route::get('/auth/google', [Login::class, 'redirectToProvider'])->name('google.login');
Route::get('/auth/google/register', [Register::class, 'redirectToProvider'])->name('google.register');
Route::get('/auth/google/callback', [Login::class, 'handleGoogleCallback']);
Route::get('/403', function () {
    return view('errors.403');
});
Route::get('/500', function () {
    return view('errors.500');
});
Route::get('/401', function () {
    return view('errors.401');
});
Route::get('/404', function () {
    return view('errors.404');
});
