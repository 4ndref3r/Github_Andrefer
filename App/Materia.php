use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $table='materia';

    const CREATED_AT='fechaCreacion';
    const UPDATED_AT='fechaModificacion';

    protected $fillable=[
        'nombreMateria','idUsuario',
    ];
}