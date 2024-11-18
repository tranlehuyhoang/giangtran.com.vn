<?php

 

use App\Livewire\ApiClient;
use App\Livewire\ChuyenKhoan;
use App\Livewire\Cron\Checkpayment;
use App\Livewire\ForgotPassword;
use App\Livewire\Home;
use App\Livewire\Hosting\Ca;
use App\Livewire\LandingPage;
use App\Livewire\Login;
use App\Livewire\Manage\Cronjob;
use App\Livewire\Manage\Vps;
use App\Livewire\NapCard;
use App\Livewire\Profile;
use App\Livewire\Register;
use App\Livewire\Hosting\VnPremium;
use App\Livewire\Reseller\VnPremium as ResellerVnPremium;
use App\Livewire\Hosting\MuaHosting;
use App\Livewire\Manage\Hosting;
use App\Livewire\Manage\Reseller;
use App\Livewire\KhoMaNguon;
use App\Livewire\RutTien;
use App\Livewire\ThueCron;
use App\Livewire\TiepThiLienKet;
use App\Livewire\VpsStore\CloudVpsVietNam\CloudVpsPro;
use App\Livewire\VpsStore\CloudVpsVietNam\CloudVpsPro\Detail;
use App\Livewire\KhoMaNguon\Detail as KhoMaNguonDetail;
use App\Livewire\Manage\Code;
use App\Livewire\Product\Hosting\Detail as DetailHosting;
use App\Livewire\HoaDon\Detail as DetailHoaDon;
use Illuminate\Support\Facades\Route;

// template

Route::get('/landing-page', LandingPage::class)->name('landingpage');
Route::get('/', Home::class)->name('home');
Route::get('/login', Login::class)->name('login');
Route::get('/register', action: Register::class)->name('register');
Route::get('/forgot-password', action: ForgotPassword::class)->name('forgot-password');
Route::get('/profile', Profile::class)->name('profile');
Route::get('/chuyen-khoan', ChuyenKhoan::class)->name('chuyen-khoan');
Route::get('/checkpayment', Checkpayment::class)->name('checkpayment');
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
Route::get('/hoa-don/{id}', action: DetailHoaDon::class)->name('hoa-don');
Route::get('/product/hosting/{id}', action: DetailHosting::class)->name('product-hosting');
