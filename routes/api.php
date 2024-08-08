<?  
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeeController as ApiEmployeeController;

Route::apiResource('employees', ApiEmployeeController::class);
