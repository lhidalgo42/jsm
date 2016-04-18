<?php

class UsersController extends \BaseController
{

    public function admin()
    {
        $cars = Car::orderBy('visitas','DESC')->get();
        return View::make('admin.index')->with(compact('cars'));
    }

    public function views()
    {
        $cars = Car::all();
        return View::make('admin.views')->with(compact('cars'));
    }

}
