<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DataBarangTemp;
use App\Models\Transaction;
use App\Models\User;
use App\Models\PrintTemp;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use PDF;
use Illuminate\Support\Arr;

class ReportController extends Controller
{

    public function index2(Request $request)
    {

        $user = $request->user();

        $cari = $request->search;
        $check_tanggal = $request->check_tanggal;

        $cara_pembayaran = $request->cara_pembayaran;

        $q_tanggal = "";
        if ($check_tanggal != ""){
            $q_tanggal = " AND date(`created_at`) BETWEEN '".$request->tanggal_awal."' and '$request->tanggal_akhir' ";
        }

        $q_cara_pembayaran = "";
        if ($cara_pembayaran != ""){
            $q_cara_pembayaran = ' AND cara_pembayaran = "'.$cara_pembayaran.'" ';
        }

        $q_cabang = "";
        if($request->user()->cabang != "All"){
            $q_cabang = " AND cabang = '".$request->user()->cabang."' ";
        }

        // $datas = Transaction::orderBy('id','DESC')
        //     ->whereRaw(' (nama_pengirim like "%'.$cari.'%" or
        //         alamat_pengirim like "%'.$cari.'%" or
        //         no_handphone_pengirim like "%'.$cari.'%" or
        //         nama_penerima like "%'.$cari.'%" or alamat_penerima like "%'.$cari.'%" or no_handphone_penerima like "%'.$cari.'%" or cabang like "%'.$cari.'%"  )
        //         '.$q_cara_pembayaran.$q_cabang.$q_tanggal)
        //         ->paginate(10)
        ;

        $datas = DB::table('print_temps')
        ->join('transactions', 'transactions.id', '=', 'print_temps.id_transaction' )
        // ->join('data_barang_temps', 'data_barang_temps.id_transaction', '=', 'transactions.id')
        ->where('print_temps.id_user', $user->id)
            ->paginate(10);

        // dd($datas);

        return view('print.index',compact('datas'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function index(Request $request)
    {

        $user = $request->user();

        $cari = $request->search;
        $cabang = $request->cabang;
        $cara_pembayaran = $request->cara_pembayaran;

        
        $check_tanggal = $request->check_tanggal;
        $tanggal_awal = $request->tanggal_awal;
        $tanggal_akhir = $request->tanggal_akhir;

        $filter_tgl = " AND CAST(transactions.created_at as DATE) between '$tanggal_awal' AND '$tanggal_akhir'";

        if ($check_tanggal != "checked"){
            $filter_tgl = "";
        }

        // DB::enableQueryLog(); // Enable query log

        $datas = DB::table('transactions')
            ->select( 'transactions.no_resi', 'transactions.cabang', 'transactions.cara_pembayaran', 'transactions.created_at',  DB::raw('SUM(data_barang_temps.qty) as total_qty'), DB::raw('SUM(data_barang_temps.berat_barang) as total_berat'), DB::raw('SUM(data_barang_temps.biaya_barang) as total_biaya') )
            ->join('data_barang_temps', 'transactions.id', '=', 'data_barang_temps.id_transaction' )
            ->groupBy('no_resi', 'cabang', 'created_at', 'cara_pembayaran')
            ->whereRaw('transactions.no_resi like "%'.$cari.'%" AND transactions.cabang like "%'.$cabang.'%" AND transactions.cara_pembayaran like "%'.$cara_pembayaran.'%" '.$filter_tgl)
            ->paginate(10);

        // dd($filter_tgl);

        // Your Eloquent query executed by using get()

        // dd(DB::getQueryLog()); // Show results of log

        $total = DB::table('transactions')
            ->select( 'transactions.no_resi', 'transactions.cabang', 'transactions.cara_pembayaran', 'transactions.created_at',  DB::raw('SUM(data_barang_temps.qty) as total_qty'), DB::raw('SUM(data_barang_temps.berat_barang) as total_berat'), DB::raw('SUM(data_barang_temps.biaya_barang) as total_biaya') )
            ->join('data_barang_temps', 'transactions.id', '=', 'data_barang_temps.id_transaction' )
            ->groupBy('no_resi', 'cabang', 'created_at', 'cara_pembayaran')
            ->whereRaw('transactions.no_resi like "%'.$cari.'%" AND transactions.cabang like "%'.$cabang.'%" AND transactions.cara_pembayaran like "%'.$cara_pembayaran.'%" '.$filter_tgl)
            ->get();

        
        $total_qty = 0;
        $total_berat = 0;
        $total_biaya = 0;

        for($i = 0; $i < count($total); $i++ ){
            $total_qty += $total[$i]->total_qty;
            $total_berat += $total[$i]->total_berat;
            $total_biaya += $total[$i]->total_biaya;
        }

        $cabangs = DB::table('users')->select('cabang')->distinct()->get();

        // dd($cabangs);

        return view('report.index', compact('datas'))
            ->with('i', ($request->input('page', 1) - 1) * 10)
            ->with('cabangs', $cabangs)
            ->with('total_qty', $total_qty)
            ->with('total_berat', $total_berat)
            ->with('total_biaya', $total_biaya)
            ;

    }

}