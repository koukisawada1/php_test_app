@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <p>名前：</p>
                            <p>タイトル：</p>
                            <p>メールアドレス：</p>
                            <p>URL：</p>
                            <p>性別：</p>
                            <p>年齢：</p>
                            <p>内容：</p>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <p>{{ $contact->your_name }}</p>
                            <p>{{ $contact->title }}</p>
                            <p>{{ $contact->email }}</p>
                            <p>{{ $contact->url }}</p>
                            <p>{{ $gender }}</p>
                            <p>{{ $age }}</p>
                            <p>{{ $contact->contact }}</p>
                        </div>
                    </div>
                    

                    <form method="GET" action="{{route('contact.edit', ['id' => $contact->id ])}}">
                        @csrf
                        
                        <input class="btn btn-info" type="submit" value="変更する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
