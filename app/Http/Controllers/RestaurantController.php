<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Jour;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all();

        return view('restaurants.index', compact('restaurants'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $jours = $this->getDaysWithRestaurants($id);
        $restaurant = $this->getRestaurantById($id);

        return view('restaurants.show', compact('jours', 'restaurant'));
    }

    protected function getDaysWithRestaurants($id)
    {
        return Jour::with(['restaurants' => function ($query) use($id) {
            $query->where('restaurants.id', $id);
        }])->get();
    }

    protected function getRestaurantById($id)
    {
        return Restaurant::find($id);
    }
}

