

@extends("appBlade")




@section('content')

@if($products->isEmpty())
    <p>No products found.</p>
@else
    <table border="1" class="bg-orange-700">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Image</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->productName }}</td>
                    {{-- <td>{{ $product->description }}</td>
                    <td>{{ $product->image }}</td> 

                     <h1>Product List</h1>
                    
                    --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
@endsection('content')
