@extends('layouts.app')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>{{__('Available products')}}</h4>
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
                    <a class="hollow button" href="{{ route('debit', ['product_id' => $product->id ]) }}">{{__('Debit')}}</a>
                  </td>
                </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
@endsection
