<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\MedicineStock;



class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::all();
        return $medicines;

        return view('dashboard.dashboardPages.vaccine_data');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dashboardPages.vaccineData.add_vaccine');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'medicine_name' => 'required|string',
        ]);

        try {
            $medicine = Medicine::create([
                'medicine_name' => $request->input('medicine_name')
            ]);

            $response['message'] = 'Obat/Vaksin berhasil ditambahkan!';
            $response['success'] = true;

        } catch (\Exception $e) {
            $response['message'] = $e->getMessage();
            $response['success'] = false;
        }

        return $response;







    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($medicine_id, $medicine_stock_id)
    {
        // $medicine = Medicine::find($medicine_id);

        // $medicine_stock = MedicineStock::all()

        // return view('dashboard.dashboardPages.vaccineData.edit_vaccine', ['medicine'=>$medicine, 'medicine_stock'=>$medicine_stock]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($medicine_id)
    {
        $medicine = Medicine::find($medicine_id);

        return $medicine;
        return view('dashboard.dashboardPages.vaccineData.edit_vaccine');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $medicine_id)
    {
        try {
            $medicine = Medicine::where('medicine_id', $medicine_id)->update([
               'medicine_name' => $request->input('medicine_name')
           ]);

           $response['message']= "Nama Obat/Vaksin berhasil diganti!";
           $response['success']= true;

       } catch (\Exception $e) {
           $response['message']= $e->getMessage();
           $response['success']= false;
       }

     

       return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($medicine_id)
    {
        $medicine = Medicine::find($medicine_id);
        $medicine->delete();
        return response()->json([
            'status' => 200,
            'message' => "Data Obat/Vaksin berhasil dihapus!"
        ]);
    }
}
