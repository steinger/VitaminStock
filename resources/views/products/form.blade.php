@extends('layouts.app')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>{{ $modify == 1 ? __('Modify Product') : __('New Product') }}</h4>
        <form action="{{ $modify == 1 ? route('update_product', [ 'product_id' => $product_id ]) : route('create_product') }}" method="post">
          {{ csrf_field() }}
          <div class="medium-4  columns">
            <label>{{__('Product')}}</label>
            <input name="name" type="text" value="{{ old('name') ? old('name') : $name }}">
            <small class="error">{{$errors->first('name')}}</small>
          </div>
          <div class="medium-4  columns">
            <label>Stock</label>
            <input name="stock" type="number" value="{{ old('stock') ? old('stock') : $stock }}">
            <small class="error">{{$errors->first('stock')}}</small>
          </div>
          <div class="medium-8  columns">
            <label>{{__('Description')}}</label>
            <input name="description" type="text" value="{{ old('description') ? old('description') : $description }}">
            <small class="error">{{$errors->first('description')}}</small>
          </div>
          <div class="medium-12  columns">
            <input value="{{__('SAVE')}}" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>
@endsection
