namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Dokumen;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::with('dokumen')->get();
        return view('peminjaman.index', compact('peminjamen'));
    }

    public function create()
    {
        $dokumens = Dokumen::all();
        return view('peminjaman.create', compact('dokumens'));
    }

    public function store(Request $request)
    {
        $peminjaman = new Peminjaman();
        $peminjaman->dokumen_id = $request->dokumen_id;
        $peminjaman->petugas = $request->petugas;
        $peminjaman->tanggal_pinjam = $request->tanggal_pinjam;
        $peminjaman->save();

        return redirect()->route('peminjamen.index');
    }
}
