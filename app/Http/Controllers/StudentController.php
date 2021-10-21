<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    function save()
    {
    $req=\request()->all();
  //  print_r($req);
    $name=$req["name"];
    $fname=$req["fname"];
    $mark1=$req["mark1"];
    $mark2=$req["mark2"];
    $mark3=$req["mark3"];

    $total=$mark1+$mark2+$mark3;
    $average=$total/3;

    $data=[
        'name'=> $name,
        'fname'=> $fname,
        'mark1'=> $mark1,
        'mark2'=> $mark2,
        'mark3'=> $mark3,
        'total'=> $total,
        'average'=> $average,

    ];


   $retv= DB::table("register")->insert($data);
   if($retv)
   {
       echo "success";
   }

    }

    function regform()
    {
        return view("regform");
    }

    function edit() {
        $id=\request()->id;

    //  $resget=  DB::table("register")->where(['id'=>$id])->get();
        //print_r($resget);
      $res=  DB::table("register")->where(['id'=>$id])->first();

      print_r($res);
echo "<br>";


      $data=[
          'id'=>$res->id ,
          'name'=>$res->name ,
          'fname'=>$res->fname ,
          'mark1'=>$res->mark1 ,
          'mark2'=>$res->mark2 ,
          'mark3'=>$res->mark3 ,
          'total'=>$res->total ,
          'average'=>$res->average

      ];
      echo "<br>";

return view("editform")->with($data);

    }

    function update()
    {


            $req=\request()->all();
            //  print_r($req);
            $id=$req["id"];
            $name=$req["name"];
            $fname=$req["fname"];
            $mark1=$req["mark1"];
            $mark2=$req["mark2"];
            $mark3=$req["mark3"];

            $total=$mark1+$mark2+$mark3;
            $average=$total/3;

            $data=[

                'name'=> $name,
               /* 'fname'=> $fname,*/
                'mark1'=> $mark1,
                'mark2'=> $mark2,
                'mark3'=> $mark3,
                'total'=> $total,
                'average'=> $average,

            ];

          $res=  DB::table('register')->where(['id'=>$id])->update($data);
          if($res)
          {
              echo "Update success";
          }
          else {
              echo "Not update";
          }
    }

}
