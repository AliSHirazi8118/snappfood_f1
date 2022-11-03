@extends('inc.cdn')

@section('c')
<h3 class="d-flex justify-content-center text-white" style="padding-top: 20px">انواع غذاها</h3>
    @if (isset($foods))
        @foreach ($foods as $f )
        <div dir="rtl" class="d-flex gap-4 justify-content-center" style="margin-top: 10px ; padding-top:5px ; background-color:rgb(216, 242, 232)" >
           <h5>
                   نام غذا : {{$f->food_name}}
                   <br>
                   قیمت : {{$f->price}}
               </h5>
               <a href="/foods/{{ $f->id }}/edit" class="btn btn-primary btn-lg btn-block mt-1 mb-4" style="margin-right: 500px ; height:40px; width:100px">ویرایش</a>
               <form action="/foods/{{ $f->id }}" method="post">
                   @csrf
                   @method('DELETE')
                   <input type="submit" value="حذف" class="btn btn-danger btn-lg btn-block mt-1" style="height:40px ; width:100px">
               </form>
               <a href="/foods/{{ $f->id }}" class="btn btn-primary btn-lg btn-block mt-1 mb-4" style="margin-right: 0px ; margin-left:0px;  height:40px; width:100px">نمایش</a>
       </div>

       @endforeach
    @endif
<a href="/foods/create" class="btn btn-success btn-lg btn-block mt-4" style="margin-left: 660px ; height:50px; width:200px">دسته بندی جدید</a>
<a href="/dashboard" class="btn btn-success btn-lg btn-block mt-1 mb-4" style="margin-left: 710px ; height:50px; width:100px">بازگشت</a>

@endsection
