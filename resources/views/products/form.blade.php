@extends('layouts.app')

@section('content')
<form action="{{ $modify == 1 ? route('update_product', [ 'product_id' => $product_id ]) : route('create_product') }}" method="post">
  <div class="grid-container">
    <h4>{{ $modify == 1 ? __('Modify Product') : __('New Product') }}</h4>
    <div class="grid-y grid-padding-y">
          {{ csrf_field() }}
          <div class="medium-6 cell">
            <label>{{__('Product')}}
              <input name="name" type="text" value="{{ old('name') ? old('name') : $name }}">
              <small class="error">{{$errors->first('name')}}</small>
            </label>
          </div>
          <div class="medium-6 cell">
            <label>Stock
              <input name="stock" type="number" value="{{ old('stock') ? old('stock') : $stock }}">
              <small class="error">{{$errors->first('stock')}}</small>
            </label>
          </div>
          <div class="medium-6 cell">
            <label>{{__('Description')}}
              <input name="description" type="text" value="{{ old('description') ? old('description') : $description }}">
              <small class="error">{{$errors->first('description')}}</small>
            </label>
          </div>
          <div class="medium-6 cell">
            <input value="{{__('SAVE')}}" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>
@endsection
