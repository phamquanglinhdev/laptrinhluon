{{-- custom return value --}}
@php
    $value = $entry->{$column['function_name']}(...($column['function_parameters'] ?? []));

    $column['escaped'] = $column['escaped'] ?? false;
    $column['limit']   = $column['limit'] ?? 40;
    $column['prefix']  = $column['prefix'] ?? '';
    $column['suffix']  = $column['suffix'] ?? '';
    $column['text']    = $column['prefix'].
                         $value.
                         $column['suffix'];
@endphp

<div>
	@includeWhen(!empty($column['wrapper']), 'crud::columns.inc.wrapper_start')
    @if($column['escaped'])
        {{ $column['text'] }}
    @else
        {!! $column['text'] !!}
    @endif
    @includeWhen(!empty($column['wrapper']), 'crud::columns.inc.wrapper_end')
</div>
