@extends('kouka2_1.blade.php')

@section('title', 'Kouka')

@section('menu_title')
検索エンジン詳細画面

@endsection
@section('content')
   <table>
   <tr><th>Name</th><th>URL</th></tr>
       <tr>
           <td>{{$item->getDate()}}</td>
           <td>{{$item->url}}</td>
       </tr>
   </table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
