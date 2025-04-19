@extends('layouts.app')
@section('contents')
    <div>
       <div class="col-md-4">

        {{-- @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif --}}

        <div class="card">
            <div class="card-header">
                <h4>Form</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('form.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control">
                        @error('title')
                            <i class="text-danger">{{ $message }}</i>
                        @enderror
                    </div>
                    <div>
                        <label for="">Description</label>
                        <textarea name="description" class="form-control"></textarea>
                        @error('description')
                                <i class="text-danger">{{ $message }}</i>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>  
       </div>
    </div>
@endSection
