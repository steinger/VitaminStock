<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<table>
  <thead>
    <tr>
      <th width="100">{{__('Product')}}</th>
      <th width="50">Stock</th>
      <th width="200">{{__('Description')}}</th>
    </tr>
  </thead>
  <tbody>

  @foreach( $products as $product )
      <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->stock }}</td>
        <td>{{ $product->description }}</td>
      </tr>
  @endforeach

  </tbody>
</table>
