@extends('layouts.app')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>{{__('Products')}}</h4>
        <div class="medium-2  columns"><a class="button hollow success" href="{{ route('new_product') }}">{{__('ADD NEW PRODUCT')}}</a></div>

        <table class="stack">
          <thead>
            <tr>
              <th width="200">{{__('Product')}}</th>
              <th width="200">Stock</th>
              <th width="200">{{__('Action')}}</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $products as $product )
                <tr>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->stock }}</td>
                  <td>
                    <a class="hollow button" href="{{ route('show_product', ['product_id' => $product->id ]) }}">{{__('EDIT')}}</a>
                  </td>
                </tr>
            @endforeach

          </tbody>
        </table>

      </div>
    </div>
@endsection
