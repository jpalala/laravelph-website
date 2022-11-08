@extends('layouts.admin')
@section('content')
@can('meetup_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.meetups.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.meetup.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.meetup.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Meetup">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.meetup.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.meetup.fields.registration_url') }}
                        </th>
                        <th>
                            {{ trans('cruds.meetup.fields.blurb') }}
                        </th>
                        <th>
                            {{ trans('cruds.meetup.fields.topics') }}
                        </th>
                        <th>
                            {{ trans('cruds.meetup.fields.time_start') }}
                        </th>
                        <th>
                            {{ trans('cruds.meetup.fields.time_end') }}
                        </th>
                        <th>
                            {{ trans('cruds.meetup.fields.timezone') }}
                        </th>
                        <th>
                            {{ trans('cruds.meetup.fields.duration') }}
                        </th>
                        <th>
                            {{ trans('cruds.meetup.fields.reg_is_open') }}
                        </th>
                        <th>
                            {{ trans('cruds.meetup.fields.covid_status_form') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($meetups as $key => $meetup)
                        <tr data-entry-id="{{ $meetup->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $meetup->id ?? '' }}
                            </td>
                            <td>
                                {{ $meetup->registration_url ?? '' }}
                            </td>
                            <td>
                                {{ $meetup->blurb ?? '' }}
                            </td>
                            <td>
                                {{ $meetup->topics ?? '' }}
                            </td>
                            <td>
                                {{ $meetup->time_start ?? '' }}
                            </td>
                            <td>
                                {{ $meetup->time_end ?? '' }}
                            </td>
                            <td>
                                {{ $meetup->timezone ?? '' }}
                            </td>
                            <td>
                                {{ $meetup->duration ?? '' }}
                            </td>
                            <td>
                                {{ $meetup->reg_is_open ?? '' }}
                            </td>
                            <td>
                                {{ $meetup->covid_status_form ?? '' }}
                            </td>
                            <td>
                                @can('meetup_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.meetups.show', $meetup->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('meetup_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.meetups.edit', $meetup->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('meetup_delete')
                                    <form action="{{ route('admin.meetups.destroy', $meetup->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('meetup_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.meetups.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Meetup:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
