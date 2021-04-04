<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-grow font-semibold text-xl text-gray-800 leading-tight">
                Orders
            </h2>
        </div>
    </x-slot>
    <table
        class="table-auto max-w-7xl mx-auto my-6 sm:px-6 lg:px-8 border-double border-4 border-light-blue-500 bg-white overflow-hidden shadow-xl sm:rounded-lg ">
        <thead>
        <tr class="text-left">
            <th class="w-1/12">#Id</th>
            <th class="w-2/12">Name</th>
            <th class="w-2/12">Address</th>
            <th class="w-2/12">Postcode</th>
            <th class="w-2/12">Phone-Number</th>
            <th class="w-2/12">Time placed</th>
            <th class="w-1/12">Total-Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)

            <tr class="divide-y divide-fuchsia-300">
                <td class="">{{$order->id}}</td>
                <td>{{$order->name}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->postcode}}</td>
                <td>{{$order['phone-number']}}</td>
                <td>{{$order->created_at}}</td>
                <td>£{{number_format($order->totalprice,2)}}</td>
            </tr>


            @foreach($order->content as $item)

                <tr>
                    <td colspan="5"> {{$item->name}}</td>
                    <td colspan="2">£{{number_format($item->price,2)}}</td>
                </tr>

            @endforeach


        @endforeach
        </tbody>
    </table>


</x-app-layout>
