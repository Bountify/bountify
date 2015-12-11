<!DOCTYPE html>
<html>
<body>

<!-- This is the first version/attempt
<ul>
	@foreach($listgiftneed as $giftneed)
		<li>{{$giftneed->GiftorNeed}}</li> 
	@endforeach
</ul>
-->

<!--This is the second version/attempt-->

@if (count($listgiftneed))
    @foreach($listgiftneed as $giftneed)
        @include('Gift.Need.Model', $giftneed)
    @endforeach
@else
    <p>No Gifts or Needs to update!</p>
@endif        