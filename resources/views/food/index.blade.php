@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                  <ul class="list-group">
                      <a href="" class="list-group-item list-group-item-action">Main Menu</a>
                      <a href="" class="list-group-item list-group-item-action">Side Dish</a>
                  </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Food</div>

                <div class="card-body">

                 <div class="form-group">
                    <label for="name">Name of Food</label>
                    <input type="text" class="form-control" name="name">
                 </div>

                 <div class="form-group">
                    <label for="description">Food description</label>
                    <textarea name="description" id="" class="form-control"></textarea>
                 </div>
                
                 <div class="form-group">
                      <label for="">Food price(RM)</label>
                        <div class="form-inline"> 
                          <input type="number" class="form-control" placeholder="prize of food">
                          <input type="number" class="form-control" placeholder="prize of food">
                          <input type="number" class="form-control" placeholder="prize of food">
                         </div>
                 </div>
                

                 <div class="form-group">
                    <label for="Category">Category</label>
                    <select class="form-control" >
                        <option value="nonvegetarian">non vegetarian</option>
                        <option value="vegetarian">vegetarian</option>
                    </select>
                 </div>

                 <div class="form-group">
                    <label for="Image"></label>
                    <input type="file" class="form-control" >
                 </div>

                 <div class="form-group text-center">
                    <button class="btn btn-primary" type="submit">Save</button>
                 </div>

                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
