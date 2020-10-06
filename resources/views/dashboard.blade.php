@extends('layouts.app')

@section('content')
    <div class="accordion" id="accordionExample">
        @foreach($users as $user)
            <div class="card">
                <div class="card-header p-0" id="heading{{$loop->iteration}}">
                    <h2 class="mb-0">
                        <button class="btn btn-light btn-block text-left p-3 rounded-0" type="button" data-toggle="collapse" data-target="#collapse{{$loop->iteration}}" aria-expanded="true" aria-controls="collapseOne">
                            {{$user->name}} ({{$user->products->count()}})
                        </button>
                    </h2>
                </div>

                <div id="collapse{{$loop->iteration}}" class="collapse" aria-labelledby="heading{{$loop->iteration}}" data-parent="#accordionExample">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Article</th>
                                <th scope="col">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($user->products as $product)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->article}}</td>
                                        <td>{{$product->price}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
