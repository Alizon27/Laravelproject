use App\Http\Controllers\SuperheroController;
use App\Http\Controllers\UniverseController;

Route::resource('superheroes', SuperheroController::class);
Route::resource('universes', UniverseController::class);

