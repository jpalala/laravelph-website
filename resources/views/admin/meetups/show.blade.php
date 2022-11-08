@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.meetup.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.meetups.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.meetup.fields.id') }}
                        </th>
                        <td>
                            {{ $meetup->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.meetup.fields.registration_url') }}
                        </th>
                        <td>
                            {{ $meetup->registration_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.meetup.fields.blurb') }}
                        </th>
                        <td>
                            {{ $meetup->blurb }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.meetup.fields.topics') }}
                        </th>
                        <td>
                            {{ $meetup->topics }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.meetup.fields.time_start') }}
                        </th>
                        <td>
                            {{ $meetup->time_start }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.meetup.fields.time_end') }}
                        </th>
                        <td>
                            {{ $meetup->time_end }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.meetup.fields.timezone') }}
                        </th>
                        <td>
                            {{ $meetup->timezone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.meetup.fields.duration') }}
                        </th>
                        <td>
                            {{ $meetup->duration }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.meetup.fields.is_bootcamp') }}
                        </th>
                        <td>
                            {{ $meetup->is_bootcamp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.meetup.fields.reg_is_open') }}
                        </th>
                        <td>
                            {{ $meetup->reg_is_open }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.meetup.fields.covid_status_form') }}
                        </th>
                        <td>
                            {{ $meetup->covid_status_form }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.meetups.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
