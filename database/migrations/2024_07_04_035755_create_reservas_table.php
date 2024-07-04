use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('laboratorio_id')->constrained('laboratorios');
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->dateTime('fecha_solicitud');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->text('observacion')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
