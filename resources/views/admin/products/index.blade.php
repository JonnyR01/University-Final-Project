<title>Manage Products</title>
<x-app-layout>
    <x-slot name="header">
        <div class="flex">
        <h2 class="flex-grow font-semibold text-xl text-gray-800 leading-tight">
           Products
        </h2>
        <a class="flex-shrink" href="{{ route('admin.products.create') }}">
            <x-jet-button>Add new product</x-jet-button>
        </a>
        </div>
    </x-slot>
    <table class="table-auto max-w-7xl mx-auto my-6 sm:px-6 lg:px-8 border-double border-4 border-light-blue-500 bg-white overflow-hidden shadow-xl sm:rounded-lg ">
        <thead>
        <tr class="text-left">
            <th class="w-1/12">#Id</th>
            <th class="w-4/12">Name</th>
            <th>Type</th>
            <th class="w-1/12">Price</th>
            <th class="w-2/12">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)  <?php?>
        <tr class="divide-y divide-fuchsia-300">
            <td class="">{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->type}}</td>
            <td>£{{number_format($product->price,2)}}</td>
            <td>
                <a href="{{ route('admin.products.edit', $product->id) }}">
                    <x-jet-button>Edit</x-jet-button>
                </a>

                <x-jet-danger-button onClick="event.preventDefault();
                document.getElementById('delete-product-form-{{$product->id}}').submit()">Delete
                </x-jet-danger-button>

                <form id="delete-product-form-{{$product->id}}" action="{{route('admin.products.destroy', $product->id)}}" method="POST" style="display: none">
                      @csrf
                      @method("DELETE")
                </form>

            </td>

        </tr>
        @endforeach
        </tbody>
    </table>

    <div class="flex auto max-w-7xl mx-auto my-6 sm:px-6 lg:px-8 border-double border-4 border-light-blue-500 bg-white overflow-hidden shadow-xl sm:rounded-lg">  {{$products->links()}}</div>

</x-app-layout>
