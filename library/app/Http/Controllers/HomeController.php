<?php

namespace App\Http\Controllers;

// use app model
use App\Models\Member;
use App\Models\Book;
use App\Models\Catalog;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $members = Member::with('user')->get();
        // $books = Book::with('publisher','catalog','author')->get();
        // $data = Member::select('*')
        //             ->join('users','users.member_id', '=', 'members.id')
        //             ->get();

        // $data2 = Member::select('*')
        //             ->leftJoin('users', 'users.member_id','=','members.id')
        //             ->Where('users.id',NULL)
        //             ->get();

        // $data3 = Transaction::select('members.id','members.name')
        //             ->rightJoin('members','members.id', '=', 'transactions.member_id')
        //             ->where('transactions.member_id',NULL)
        //             ->get();

        // $data4 = Member::select('members.id','members.name','members.phone_number')
        //             ->join('transactions','transactions.member_id','=','members.id')
        //             ->orderBy('members.id','asc')
        //             ->get();

        // $data5 = Member::select('members.id', 'members.name', 'members.phone_number')
        //             ->rightJoin('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->where('transactions.id', '!=', NULL)
        //             ->groupBy('members.id','members.name','members.phone_number')
        //             ->having(DB::raw('count(members.id)'), '>', 1)
        //             ->get();

        // $data6 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->get();

        // $data7 = Member::select('members.name', 'members.phone_number', 'members.address','transactions.date_start', 'transactions.date_end')
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->where('date_end', '>=','2022-06-01')
        //             ->where('date_end', '<=', '2022-06-30')
        //             ->get();

        // $data8 = Member::select('members.name', 'members.phone_number','members.address','transactions.date_start', 'transactions.date_end')
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->where('date_start', '>=','2022-05-01')
        //             ->where('date_start', '<=', '2022-05-31')
        //             ->get();

        // $data9 = Member::select('members.name', 'members.phone_number','members.address', 'transactions.date_start', 'transactions.date_end')
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->where('date_start', '>=','2022-06-01')
        //             ->where('date_start', '<=', '2022-06-30')
        //             ->where('date_end', '>=','2022-06-01')
        //             ->where('date_end', '<=', '2022-06-30')
        //             ->get();
                   
        // $data10 = Member::select('members.name', 'members.phone_number','members.address', 'transactions.date_start', 'transactions.date_end')
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->where('address', 'like', '%Bandung%')
        //             ->get();

        // $data11 = Member::select('members.name', 'members.phone_number','members.address', 'transactions.date_start', 'transactions.date_end')
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->where('address', 'like', '%Bandung%')
        //             ->where('gender', 'like', '%P%')
        //             ->get();
        
        // $data12 = Member::select('members.name', 'members.phone_number','members.address', 'transactions.date_start', 'transactions.date_end')
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->join('transaction_details','transaction_details.transaction_id', '=','transactions.id')
        //             ->where('qty', '>', '1')
        //             ->get();

        // $data13 = Member::select('members.name', 'members.phone_number','members.address', 'transactions.date_start',
        //                          'transactions.date_end', 'books.isbn', 'books.qty', 'books.title', 'books.price', DB::raw( 'transaction_details.qty * books.price as totalPrice'))
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->join('transaction_details','transaction_details.transaction_id', '=','transactions.id')
        //             ->join('books', 'books.id', '=', 'transaction_details.book_id')
        //             ->get();

        // $data13 = Member::select('members.name', 'members.phone_number','members.address', 'transactions.date_start',
        //                          'transactions.date_end', 'books.isbn', 'books.qty', 'books.title', 'books.price', DB::raw( 'transaction_details.qty * books.price as totalPrice'))
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->join('transaction_details','transaction_details.transaction_id', '=','transactions.id')
        //             ->join('books', 'books.id', '=', 'transaction_details.book_id')
        //             ->get();

        // $data14 = Member::select('members.name', 'members.phone_number','members.address', 'transactions.date_start',
        //                          'transactions.date_end', 'books.isbn', 'books.qty', 'books.title', 'publishers.name',
        //                          'authors.name','catalogs.name'
        //                           )
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->join('transaction_details','transaction_details.transaction_id', '=','transactions.id')
        //             ->join('books', 'books.id', '=', 'transaction_details.book_id')
        //             ->join('publishers','books.publisher_id', '=', 'publishers.id')
        //             ->join('authors', 'books.author_id', '=', 'authors.id')
        //             ->join('catalogs', 'books.catalog_id', '=', 'catalogs.id')
        //             ->get();
        
        // $data15 = Book::select('catalogs.*','books.title')
        //             ->join('catalogs', 'books.catalog_id', '=', 'catalogs.id')
        //             ->get();

        // $data16 = Book::select('books.*','publishers.name')
        //             ->join('publishers','books.publisher_id', '=', 'publishers.id')
        //             ->get();

        // $data17 = Book::select('books.author_id', DB::raw('count(*) as author_idCount'))
        //             ->where('books.author_id', '=', '9')
        //             ->groupBy('books.author_id')
        //             ->get();
        
        // $data18 = Book::select('books.*')
        //             ->where('books.price', '>=', '15000')
        //             ->get();

        // $data19 = Book::select('books.*')
        //             ->where('books.publisher_id', '=', '20')
        //             ->where('books.qty', '>', '15')
        //             ->get();

        // $data20 = Member::select('members.*')
        //             ->where('created_at', '>=', '2022-08-01')
        //             ->where('created_at', '<=', '2022-08-30')
        //             ->get();


        // return $data5;

        $total_anggota = Member::count();
        $total_buku = Book::count();
        $total_penerbit = Publisher::count();
        $total_peminjaman = Transaction::whereMonth('date_start', date('m'))->count();

        $data_donut = Book::select(DB::raw("COUNT(publisher_id) as total"))->groupBy('publisher_id')->orderBy('publisher_id', 'asc')->pluck('total');
        $label_donut = Publisher::orderBy('publishers.id', 'asc')->join('books', 'books.publisher_id', '=', 'publishers.id')->groupBy('publishers.name')->pluck('publishers.name');

        $label_bar =['Peminjaman', 'Pengembalian'];
        $data_bar =[];

        foreach ($label_bar as $key => $value) {
            $data_bar[$key]['label'] = $label_bar[$key];
            $data_bar[$key]['backgroundColor']= $key == 0 ? 'rgb(0,255,255)' : 'RGBA( 0,255,255, 0, 1 )';
            $data_month =[];

            foreach (range(1,12) as $month) {
                if ($key==0){
                $data_month[] = Transaction::select(DB::raw ("COUNT(*) as total"))->whereMonth('date_start', $month)->first()->total;
        } else {
            $data_month[] = Transaction::select(DB::raw ("COUNT(*) as total"))->whereMonth('date_end', $month)->first()->total;
        }
        }
            $data_bar[$key]['data'] = $data_month;
        }
       

        return view('home', compact('total_buku','total_anggota','total_peminjaman','total_penerbit', 'data_donut', 'label_donut', 'data_bar'));

    }
}
