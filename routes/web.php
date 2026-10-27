<?php

use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Route;
use Liberu\RealEstate\Application\Filament\App\Pages\AccountSetupWizard;
use Liberu\RealEstate\LettingsLivewire\Components\RentalApplicationForm;
use Liberu\RealEstate\MarketingLivewire\Components\NewsArticleList;
use Liberu\RealEstate\MarketingLivewire\Components\NewsDetail;
use Liberu\RealEstate\PartiesLivewire\Http\Controllers\ContactEnquiryController;
use Liberu\RealEstate\PropertiesLivewire\Components\WishlistManager;
use Liberu\RealEstate\ValuationsLivewire\Components\PropertyValuationEstimator;
use Livewire\Livewire;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/contact', 'real-estate-parties-livewire::contact-enquiry-page')->name('contact.show');
Route::post('/contact', [ContactEnquiryController::class, 'store'])->middleware('throttle:10,1')->name('contact.submit');
Route::get('/calculators', fn () => response(Livewire::mount('calculators')))->name('calculators');
Route::livewire('/news', NewsArticleList::class)->name('news.list');
Route::livewire('/news/{slug}', NewsDetail::class)->name('news.detail');
Route::livewire('/properties/{propertyId}/valuation', PropertyValuationEstimator::class)
    ->whereNumber('propertyId')
    ->name('property.valuation');
Route::livewire('/apply/{property}', RentalApplicationForm::class)
    ->middleware(['auth', 'verified'])
    ->name('rental.apply');
Route::livewire('/wishlist', WishlistManager::class)
    ->middleware(['auth', 'verified'])
    ->name('wishlist');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/terms-and-conditions', 'terms-and-conditions')->name('terms');
Route::view('/privacy', 'privacy-policy')->name('privacy');

// Authenticated home — operational roles land in the admin panel, while domain
// roles use the user-facing app panel.
Route::get('/dashboard', function () {
    $user = auth()->user();

    if ($user instanceof User && $user->hasAdminAccess()) {
        $panel = Filament::getPanel('admin');
        $tenant = $user->getDefaultTenant($panel);

        return redirect($tenant !== null ? $panel->getUrl($tenant) : '/'.$panel->getPath());
    }

    if ($user instanceof User && ! AccountSetupWizard::isComplete()) {
        return redirect()->route('filament.app.pages.setup');
    }

    return redirect()->route('filament.app.pages.dashboard');
})->middleware(['auth:sanctum', config('jetstream.auth_session')])->name('dashboard');
