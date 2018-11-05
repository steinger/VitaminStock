<table class="stack">
          <thead>
            <tr>
              <th width="200">{{__('Product')}}</th>
              <th width="200">Stock</th>
              <th width="200">{{__('Description')}}</th>
              <th width="200">{{__('Action')}}</th>
            </tr>
          </thead>
          <tbody>

          @foreach( $products as $product )
              <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->description }}</td>
                <td>
                  <a class="hollow button" href="{{ route('show_product', ['product_id' => $product->id ]) }}">{{__('EDIT')}}</a>
                </td>
              </tr>
          @endforeach

          </tbody>
</table>
