@extends('layouts.app')

@section('content')
<div class="admin">
    <h2>管理画面</h2>

    <form class="search-form" action="{{ route('admin.search') }}" method="GET"> 
      <input type="text" name="keyword" placeholder="名前.メール検索" value="{{ request('keyword') }}">
      
      <select name="gender">
         <option value="">性別</option>
         <option value="1" @selected(request('gender')=='1')>男性</option>
         <option value="2" @selected(request('gender')=='2')>女性</option>
         <option value="3" @selected(request('gender')=='3')>その他</option>
      </select>

      <button type="submit">検索</button>
    </form>
    <div class="export">
      <a href="{{ route('admin.export') }}"CSV出力</a>

    <table class="admin__table">
      <tr>
         <th>ID</th>
         <th>名前</th>
         <th>性別</th>
         <th>メール</th>
         <th>電話番号</th>
         <th>お問い合わせの内容</th>
         <th>操作</th>
      </tr>

      @foreach ($contacts as $contact)
      <tr>
         <td>{{ $contact->id }}</td>
         <td>{{ $contact->name }}</td>
         <td>
            @if($contact->gender==1) 男性
            @elseif($contact->gender==2) 女性
            @else その他
            @endif
         </td>
         <td>{{ $contact->email }}</td>
         <td>{{ $contact->tel }}</td>
         <td>{{ $contact->detail }}</td>
         <td>
            <form action="{{ route('admin.delete' }}" method="POST">
               @csrf
               <input type="hidden" name="id" value="{{ $contact->id }}">
               <button type="submit">削除</button>
            </form>
         </td>
      </tr>
      @endforeach
   </table>

   {{$contacts->links() }}
</div>
@endsection





       