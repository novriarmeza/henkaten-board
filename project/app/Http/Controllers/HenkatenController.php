<?php

namespace App\Http\Controllers;

use App\Henkaten;
use App\Station;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Validator;
use Auth;

class HenkatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $henkaten = Henkaten::where("Area","A+")->orderBy("Machine_Number","ASC")->get();
        $henkatenA = Henkaten::where("Area","A")->orderBy("Machine_Number","ASC")->get();
        $henkatenB = Henkaten::where("Area","B")->orderBy("Machine_Number","ASC")->get();
        $henkatenC = Henkaten::where("Area","C")->orderBy("Machine_Number","ASC")->get();
        $henkatenD = Henkaten::where("Area","D")->orderBy("Machine_Number","ASC")->get();
        $station = DB::select('Select * from "PI_Station" left join (Select distinct on (mesin) mesin, substring(cast(in_time as varchar),1,10) as tanggal, mp_id, shift, in_time, out_time from "inout_pi" where substring(cast(in_time as varchar),1,10) = substring(cast(NOW() as varchar),1,10) order by mesin, in_time DESC) as t1 on "PI_Station"."Nama_Station" = t1.mesin  where "PI_Station"."Area" = '."'A+'".'order by "PI_Station"."Nama_Station" ASC');
        $stationA = DB::select('Select * from "PI_Station" left join (Select distinct on (mesin) mesin, substring(cast(in_time as varchar),1,10) as tanggal, mp_id, shift, in_time, out_time from "inout_pi" where substring(cast(in_time as varchar),1,10) = substring(cast(NOW() as varchar),1,10) order by mesin, in_time DESC) as t1 on "PI_Station"."Nama_Station" = t1.mesin  where "PI_Station"."Area" = '."'A'".'order by "PI_Station"."Nama_Station" ASC');
        $stationB = DB::select('Select * from "PI_Station" left join (Select distinct on (mesin) mesin, substring(cast(in_time as varchar),1,10) as tanggal, mp_id, shift, in_time, out_time from "inout_pi" where substring(cast(in_time as varchar),1,10) = substring(cast(NOW() as varchar),1,10) order by mesin, in_time DESC) as t1 on "PI_Station"."Nama_Station" = t1.mesin  where "PI_Station"."Area" = '."'B'".'order by "PI_Station"."Nama_Station" ASC');
        $stationC = DB::select('Select * from "PI_Station" left join (Select distinct on (mesin) mesin, substring(cast(in_time as varchar),1,10) as tanggal, mp_id, shift, in_time, out_time from "inout_pi" where substring(cast(in_time as varchar),1,10) = substring(cast(NOW() as varchar),1,10) order by mesin, in_time DESC) as t1 on "PI_Station"."Nama_Station" = t1.mesin  where "PI_Station"."Area" = '."'C'".'order by "PI_Station"."Nama_Station" ASC');
        $stationD = DB::select('Select * from "PI_Station" left join (Select distinct on (mesin) mesin, substring(cast(in_time as varchar),1,10) as tanggal, mp_id, shift, in_time, out_time from "inout_pi" where substring(cast(in_time as varchar),1,10) = substring(cast(NOW() as varchar),1,10) order by mesin, in_time DESC) as t1 on "PI_Station"."Nama_Station" = t1.mesin  where "PI_Station"."Area" = '."'D'".'order by "PI_Station"."Nama_Station" ASC');


        // dd($henkaten);
        return view('index',compact('henkaten','henkatenA','henkatenB','henkatenC','henkatenD','station','stationA','stationB','stationC','stationD'));
    }

    public function reload() {
        $henkaten = Henkaten::where("Area","A+")->orderBy("Machine_Number","ASC")->get();
        // return json_encode($henkaten, TRUE);
        return $henkaten;
    }
    public function reloadA() {
        $henkatenA = Henkaten::where("Area","A")->orderBy("Machine_Number","ASC")->get();
        // return json_encode($henkaten, TRUE);
        return $henkatenA;
    }
    public function reloadB() {
        $henkatenB = Henkaten::where("Area","B")->orderBy("Machine_Number","ASC")->get();
        // return json_encode($henkaten, TRUE);
        return $henkatenB;
    }
    public function reloadC() {
        $henkatenC = Henkaten::where("Area","C")->orderBy("Machine_Number","ASC")->get();
        // return json_encode($henkaten, TRUE);
        return $henkatenC;
    }
    public function reloadD() {
        $henkatenD = Henkaten::where("Area","D")->orderBy("Machine_Number","ASC")->get();
        // return json_encode($henkaten, TRUE);
        return $henkatenD;
    }


    public function reload2() {
        $station = DB::select('Select * from "PI_Station" left join (Select distinct on (mesin) mesin, substring(cast(in_time as varchar),1,10) as tanggal, mp_id, shift, in_time, out_time from "inout_pi" where substring(cast(in_time as varchar),1,10) = substring(cast(NOW() as varchar),1,10) order by mesin, in_time DESC) as t1 on "PI_Station"."Nama_Station" = t1.mesin  where "PI_Station"."Area" = '."'A+'".'order by "PI_Station"."Nama_Station" ASC');
        // return json_encode($station, TRUE);
        return $station;
    }
    public function reload3() {
        $stationA = DB::select('Select * from "PI_Station" left join (Select distinct on (mesin) mesin, substring(cast(in_time as varchar),1,10) as tanggal, mp_id, shift, in_time, out_time from "inout_pi" where substring(cast(in_time as varchar),1,10) = substring(cast(NOW() as varchar),1,10) order by mesin, in_time DESC) as t1 on "PI_Station"."Nama_Station" = t1.mesin  where "PI_Station"."Area" = '."'A'".'order by "PI_Station"."Nama_Station" ASC');
        // return json_encode($station, TRUE);
        return $stationA;
    }
    public function reload4() {
        $stationB = DB::select('Select * from "PI_Station" left join (Select distinct on (mesin) mesin, substring(cast(in_time as varchar),1,10) as tanggal, mp_id, shift, in_time, out_time from "inout_pi" where substring(cast(in_time as varchar),1,10) = substring(cast(NOW() as varchar),1,10) order by mesin, in_time DESC) as t1 on "PI_Station"."Nama_Station" = t1.mesin  where "PI_Station"."Area" = '."'B'".'order by "PI_Station"."Nama_Station" ASC');
        // return json_encode($station, TRUE);
        return $stationB;
    }
    public function reload5() {
        $stationC = DB::select('Select * from "PI_Station" left join (Select distinct on (mesin) mesin, substring(cast(in_time as varchar),1,10) as tanggal, mp_id, shift, in_time, out_time from "inout_pi" where substring(cast(in_time as varchar),1,10) = substring(cast(NOW() as varchar),1,10) order by mesin, in_time DESC) as t1 on "PI_Station"."Nama_Station" = t1.mesin  where "PI_Station"."Area" = '."'C'".'order by "PI_Station"."Nama_Station" ASC');
        // return json_encode($station, TRUE);
        return $stationC;
    }
    public function reload6() {
        $stationD = DB::select('Select * from "PI_Station" left join (Select distinct on (mesin) mesin, substring(cast(in_time as varchar),1,10) as tanggal, mp_id, shift, in_time, out_time from "inout_pi" where substring(cast(in_time as varchar),1,10) = substring(cast(NOW() as varchar),1,10) order by mesin, in_time DESC) as t1 on "PI_Station"."Nama_Station" = t1.mesin  where "PI_Station"."Area" = '."'D'".'order by "PI_Station"."Nama_Station" ASC');
        // return json_encode($station, TRUE);
        return $stationD;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Henkaten  $henkaten
     * @return \Illuminate\Http\Response
     */
    public function show(Henkaten $henkaten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Henkaten  $henkaten
     * @return \Illuminate\Http\Response
     */
    public function edit(Henkaten $henkaten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Henkaten  $henkaten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Henkaten $henkaten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Henkaten  $henkaten
     * @return \Illuminate\Http\Response
     */
    public function destroy(Henkaten $henkaten)
    {
        //
    }
}
