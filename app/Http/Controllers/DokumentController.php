namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    //menampilkan semua dokumen yang disimpan
    public function index()
    {
        $dokumens = Dokumen::all();
        return view('dokumens.index', compact('dokumens'));
    }

    //membuat dokumen baru atau menambahkan dokumen baru
    public function create()
    {
        return view('dokumens.create');
    }

    //menyimpan dokumen yg kemudian akan ditampilkan di halaman dashboard
    public function store(Request $request)
    {
        $dokumen = new Dokumen();
        $dokumen->no_rekam_medis = $request->no_rekam_medis;
        $dokumen->nama_pasien = $request->nama_pasien;
        $dokumen->tanggal_lahir = $request->tanggal_lahir;
        $dokumen->alamat = $request->alamat;
        $dokumen->save();

        return redirect()->route('dokumens.index');
    }
}
