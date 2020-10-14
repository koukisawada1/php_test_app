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
                    <form method="POST" action="{{ route('contact.update', ['id' => $contact->id]) }}">
                        @csrf
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>名前</th>
                                    <td><input type="text" name="your_name" value="{{ $contact->your_name }}"></td>
                                </tr>
                                <tr>
                                    <th>メールアドレス</th>
                                    <td><input type="email" name="email" value="{{ $contact->email }}"></td>
                                </tr>
                                <tr>
                                    <th>性別</th>
                                    <td>
                                        <input type="radio" name="gender" value="0" @if($contact->gender === 0 ) checked @endif >男性
                                        <input type="radio" name="gender" value="0" @if($contact->gender === 1 ) checked @endif >女性
                                    </td>
                                </tr>
                                <tr>
                                    <th>年齢</th>
                                    <td>
                                        <select name="age">
                                            <option value="">選択してください</option>
                                            <option value="1" @if($contact->age === 1 ) selected @endif >〜19歳</option>
                                            <option value="2" @if($contact->age === 2 ) selected @endif >20歳〜29歳</option>
                                            <option value="3" @if($contact->age === 3 ) selected @endif >30歳〜39歳</option>
                                            <option value="4" @if($contact->age === 4 ) selected @endif >40歳〜49歳</option>
                                            <option value="5" @if($contact->age === 5 ) selected @endif >50歳〜59歳</option>
                                            <option value="6" @if($contact->age === 6 ) selected @endif >60歳〜</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>URL</th>
                                    <td><input type="url" name="url" value="{{ $contact->url }}"></td>
                                </tr>
                                <tr>
                                    <th>タイトル</th>
                                    <td><input type="text" name="title" value="{{ $contact->title }}"></td>
                                </tr>
                                <tr>
                                    <th>お問い合わせ内容</th>
                                    <td><textarea name="contact" cols="40" rows="10">{{ $contact->contact }}</textarea></td>
                                </tr>
                            </tbody>
                        </table>
                    

                    
                        
                        <input class="btn btn-info" type="submit" value="更新する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
