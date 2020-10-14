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
                    <table class="table">
                            <tbody>
                                <tr>
                                    <th>名前</th>
                                    <td>{{ $contact->your_name }}</td>
                                </tr>
                                <tr>
                                    <th>メールアドレス</th>
                                    <td>{{ $contact->email }}</td>
                                </tr>
                                <tr>
                                    <th>性別</th>
                                    <td>{{ $gender }}</td>
                                </tr>
                                <tr>
                                    <th>年齢</th>
                                    <td>{{ $age }}</td>
                                </tr>
                                <tr>
                                    <th>URL</th>
                                    <td><a href="#">{{ $contact->url }}</a></td>
                                </tr>
                                <tr>
                                    <th>タイトル</th>
                                    <td>{{ $contact->title }}</td>
                                </tr>
                                <tr>
                                    <th>お問い合わせ内容</th>
                                    <td>{{ $contact->contact }}</td>
                                </tr>
                            </tbody>
                        </table>
                    

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
