@php
$dataTypeContent->{$row->field} = json_decode($dataTypeContent->{$row->field})
@endphp
<select class="form-control select2" name="{{ $row->field }}[]" multiple required>
    @foreach($options as $key => $label)
            <?php $selected = ''; ?>
        @if(is_array($dataTypeContent->{$row->field}) && in_array($key, $dataTypeContent->{$row->field}))
            <?php $selected = 'selected="selected"'; ?>
        @elseif(!is_null(old($row->field)) && in_array($key, old($row->field)))
            <?php $selected = 'selected="selected"'; ?>
        @endif
        <option value="{{ $key }}" {!! $selected !!}>
            {{ $label }}
        </option>
    @endforeach
</select>
