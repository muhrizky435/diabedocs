namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function store(Request $request)
    {
        $peminjaman = Peminjaman::findOrFail($request->peminjaman_id);
        $peminjaman->status = 'dikembalikan';
        $peminjaman->tanggal_kembali = $request->tanggal_pengembalian;
        $peminjaman->save();

        $pengembalian = new Pengembalian();
        $pengembalian->peminjaman_id = $peminjaman->id;
        $pengembalian->tanggal_pengembalian = $request->tanggal_pengembalian;
        $pengembalian->save();

        return redirect()->route('peminjamen.index');
    }
}
