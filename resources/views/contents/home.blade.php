@extends('layouts.app')

@section('content')
    <div class="grid-container">
        <h4>{{__('Available products')}}</h4>
        <div class="grid-x grid-margin-x">
            <table>
                <thead>
                <tr>
                    <th>{{__('Product')}}</th>
                    <th>Stock</th>
                    <th>{{__('Action')}}</th>
                </tr>
                </thead>
                <tbody>

                @foreach( $products as $product )
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            @if ($product->stock > 10)
                                <a class="hollow button"
                                   href="{{ route('debit', ['product_id' => $product->id ]) }}">{{__('Debit')}}</a>
                            @else
                                <a class="hollow button warning"
                                   href="{{ route('debit', ['product_id' => $product->id ]) }}">{{__('Debit')}}</a>
                            @endif
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
