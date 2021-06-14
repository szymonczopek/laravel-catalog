@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit order') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('order.update', $order->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" pattern="([A-Z]{1})+([a-z]{1,})\-" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$order->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" pattern="([A-Z]{1})+([a-z]{1,})\-" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ $order->surname }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product" class="col-md-4 col-form-label text-md-right">{{ __('Product') }}</label>

                            <div class="col-md-6">
                               <select name="product" id="product">
                                    <option value="apple">Apple</option>
                                    <option value="banana">Banana</option>
                                    <option value="orange">Orange</option>
                                </select>

                                @error('product')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>

                            <div class="col-md-6">
                                <input id="amount" type="number" min=1 class="form-control @error('surname') is-invalid @enderror" name="amount" value="{{ $order->amount }}" required autocomplete="amount" autofocus>

                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="paymentMethod" class="col-md-4 col-form-label text-md-right">{{ __('Payment method') }}</label>

                            <div class="col-md-6">
                               <select name="paymentMethod" id="paymentMethod">
                                    <option value="card">Card</option>
                                    <option value="paypal">Paypal</option>
                                    <option value="blik">Blik</option>
                                    
                                </select>

                                @error('paymentMethod')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="paymentDate" class="col-md-4 col-form-label text-md-right">{{ __('Planned payment date') }}</label>

                            <div class="col-md-6">
                                <input id="paymentDate" type="datetime-local"  class="form-control @error('paymentDate') is-invalid @enderror" name="paymentDate" value="{{ $order->paymentDate }}" required autocomplete="paymentDate" autofocus>

                                @error('paymentDate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" pattern="([A-Z]{1})+([a-z]{1,})\-" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $order->city }}" required autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $order->address }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="houseNumber" class="col-md-4 col-form-label text-md-right">{{ __('House number') }}</label>

                            <div class="col-md-6">
                                <input id="houseNumber" type="number" min=1 class="form-control @error('houseNumber') is-invalid @enderror" name="houseNumber" value="{{ $order->houseNumber }}" required autocomplete="houseNumber" autofocus>

                                @error('houseNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        
                        
                        

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit order') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
