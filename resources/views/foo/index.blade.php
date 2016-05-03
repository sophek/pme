@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif


@foreach ($educations as $education)
<form action="{{url('/utils/education')}}" method="POST">
    <input type="text" name="level" value="{{$education->level}}" />
    <input type="hidden" name="id" value="{{$education->id}}" />
    <input type="checkbox" name="delete"  />
    {!! csrf_field() !!}
    <button type="submit">Submit</button>
</form>
@endforeach

<form action="{{url('/utils/education')}}" method="POST">
    <input type="text" name="level" value="" />
    <input type="hidden" name="id" value="" />
    <input type="hidden" name="delete"  />
    {!! csrf_field() !!}
    <button type="submit">Submit</button>
</form>


<form action="{{url('/utils/state')}}" method="POST">
    <input type="text" name="name" value="" />
    <input type="text" name="abbr" value="" />
    <input type="text" name="pos" value="" />
    
    {!! csrf_field() !!}
    <button type="submit">Submit</button>
</form>    