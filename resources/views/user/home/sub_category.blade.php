
<option value="">--Select Sub Categories--</option>
@foreach ($subcategoryList as $sCList)
    <option value="{{$sCList->id}}">{{$sCList->sub_category_name}}</option>
@endforeach    