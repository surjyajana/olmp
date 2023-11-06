        <div class="form-group mb-3 tg-inputwithicon">
            <label class="control-label">Brand *</label>
            <div class="tg-select form-control">
            <select name="brand_id" id="brand_id" required>
            <option value="">--Select Brand--</option>
            @foreach ($brandList as $bList)
                <option value="{{$bList->id}}">{{$bList->brand_name}}</option>
            @endforeach
            </select>
            </div>
            </div>