@extends('layouts.app')
@section('contents')
    <div>
       <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>Form</h4>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div>
                        <label for="">Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>  
       </div>
    </div>
@endSection
