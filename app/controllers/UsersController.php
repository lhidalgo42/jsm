<?php

class UsersController extends \BaseController
{

    public function admin()
    {
        $cars = Car::orderBy('visitas','DESC')->get();
        return View::make('admin.index')->with(compact('cars'));
    }

    public function accept()
    {
        $cars = Car::all();
        return View::make('admin.accept')->with(compact('cars'));
    }
    public function edit(){
        $cars = Car::all();
        return View::make('admin.carEdit')->with(compact('cars'));
    }

}
