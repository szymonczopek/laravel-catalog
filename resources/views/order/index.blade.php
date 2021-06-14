@extends('layouts.app')

@section('content')
<div class="container">
    <div class='add'>
    <a href="{{route('order.create')}}">
        <button type="button">Add order</button>
        </a>
       
    </div>
    <table>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Product</th>
            <th scope="col">Amount</th>
            <th scope="col">Payment method</th>
            <th scope="col">Payment date</th>
            <th scope="col">City</th>
            <th scope="col">Address</th>
            <th scope="col">House number</th>
            <th scope="col">Created at</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <th scope="row"> {{$order->id}}</th>
            <td> {{$order->name}}</td>
            <td> {{$order->surname}}</td>
            <td> {{$order->product}}</td>
            <td> {{$order->amount}}</td>
            <td> {{$order->paymentMethod}}</td>
            <td> {{$order->paymentDate}}</td>
            <td> {{$order->city}}</td>
            <td> {{$order->address}}</td>
            <td> {{$order->houseNumber}}</td>
            <td > {{$order->created_at}}</td>
            <td> <a href="{{route('order.destroy',$order->id)}}">
                    <button title='Delete order' data-id="{{$order->id}}">X</button>
                </a>
                 <a href="{{route('order.edit',$order->id)}}">
                    <button title='Edit order' type="button">Edit</button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    {{$orders->links()}}
</div>
@endsection
@section('javascript')
    const deleteUrl="{{url('orders')}}/";
@endsection
@section('js-files')
    <script src="{{asset('js/delete.js')}}"></script>
@endsection