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

                    <form method="POST" action="{{route('contact.store')}}">
                        @csrf
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>名前</th>
                                    <td><input type="text" name="your_name"></td>
                                </tr>
                                <tr>
                                    <th>メールアドレス</th>
                                    <td><input type="email" name="email"></td>
                                </tr>
                                <tr>
                                    <th>性別</th>
                                    <td>
                                        <input type="radio" name="gender" value="0">男性</input>
                                        <input type="radio" name="gender" value="0">女性</input>
                                    </td>
                                </tr>
                                <tr>
                                    <th>年齢</th>
                                    <td>
                                        <select name="age">
                                            <option value="">選択してください</option>
                                            <option value="1">〜19歳</option>
                                            <option value="2">20歳〜29歳</option>
                                            <option value="3">30歳〜39歳</option>
                                            <option value="4">40歳〜49歳</option>
                                            <option value="5">50歳〜59歳</option>
                                            <option value="6">60歳〜</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>URL</th>
                                    <td><input type="url" name="url"></td>
                                </tr>
                                <tr>
                                    <th>タイトル</th>
                                    <td><input type="text" name="title"></td>
                                </tr>
                                <tr>
                                    <th>お問い合わせ内容</th>
                                    <td><textarea name="contact" cols="40" rows="10"></textarea></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="center" style="text-aline: center;">
                            <input type="checkbox" name="caution" value="1">注意事項に同意する</input>    
                            <br>

                            <input class="btn btn-info" type="submit" value="登録する">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
