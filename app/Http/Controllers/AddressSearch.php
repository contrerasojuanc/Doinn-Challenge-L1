<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Contracts\Routing\ResponseFactory;

use App\Http\Requests;

use App\Area;

class AddressSearch extends Controller
{
    /**
     * Show the area where the address is located.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request, $address)
    {
      //Proccess the address location
      
      //Get the l,l from google api
      $googleApi = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=";
      $googleApi .= rawurlencode($address);
      
      $json = json_decode(file_get_contents($googleApi), true);      
      if(isset($json['results'][0])) {
          $lat = $json['results'][0]['geometry']['location']['lat'];
          $lng = $json['results'][0]['geometry']['location']['lng'];
      }
      
      $result = "none";
      
      for ($i = 1; $i <= 2; $i++) {
        $lats = array();
        $lngs = array();
        $areas = Area::where("name", "area $i")->get();
        foreach ($areas as $area) {
//          $lats[] = $area->lat;
//          $lngs[] = $area->lng;
          //Latitudes and Longitudes are inverted in database
          $lngs[] = $area->lat;
          $lats[] = $area->lng;
        }
        $points = count($lats);
        if( $this->is_in_area($points, $lats, $lngs, $lat, $lng) ){
          $result = "area $i";
        }
      }
      
      //Then return the json response
      return response()->json(['address' => $result]);
    }
    
    /**
     * Point Inclusion in Polygon Test. (https://www.ecse.rpi.edu/Homepages/wrf/Research/Short_Notes/pnpoly.html)
     *
     * @autor W. Randolph Franklin
     */
    public function is_in_area($points, $vertices_x, $vertices_y, $longitude_x, $latitude_y)
    {
      $result = false;
      $i = $j = 0;
      for ($i = 0, $j = $points-1 ; $i < $points; $j = $i++) {
        if ( (($vertices_y[$i] > $latitude_y != ($vertices_y[$j] > $latitude_y)) &&
        ($longitude_x < ($vertices_x[$j] - $vertices_x[$i]) * ($latitude_y - $vertices_y[$i]) / ($vertices_y[$j] - $vertices_y[$i]) + $vertices_x[$i]) ) ) 
            $result = !$result;
      }
      return $result;
    }
}
