@extends('layouts.app')

@section('content')
<div class="admin">
    <h2 class="admin__title">Admin</h2>

    <form action="{{ route('admin.index') }}" method="GET" class="admin__search">
      <input type="text" name="keyword" placeholder="名前.メール検索" value="{{ request('keyword') }}">
      
      <select name="gender">
         <option value="">性別</option>
         <option value="1" @selected(request('gender')=='1')>男性</option>
         <option value="2" @selected(request('gender')=='2')>女性</option>
         <option value="3" @selected(request('gender')=='3')>その他</option>
      </select>

      <select name="category_id>
        <option value=">種類</option>
        @foreach ($categories as $category)
         <option value="{{ $Category->id }}"
         @selected(request('category_id')==$category->id)>
         {{ $category->content }}
         </option>
         @endforeach
      </select>

      <input type="date" name"date" value="{{ request('date') }}">

      <button type="submit">検索</button>
      <a href="{{ route('admin.index') }}">リセット</a>
    </form>

    <table class="admin__table">
      <tr>
         <th>ID</th>
         <th>名前</th>
         <th>性別</th>
         <th>メール</th>
         <th>電話番号</th>
         <th>種類</th>
         <th></th>
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
         <td>{{ $contact->category->content }}</td>
         <td>
            <form action="{{ route('admin.destroy', $contact->id }}" method="POST">
               @csrf
               @method('DELETE')
               <button>削除</button>
            </form>
         </td>
      </tr>
      @endforeach
   </table>

   {{$contacts->links() }}
</div>
@endsection





       