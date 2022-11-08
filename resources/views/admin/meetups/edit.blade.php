@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.meetup.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.meetups.update", [$meetup->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="registration_url">{{ trans('cruds.meetup.fields.registration_url') }}</label>
                <input class="form-control {{ $errors->has('registration_url') ? 'is-invalid' : '' }}" type="text" 
name="registration_url" id="registration_url" value="{{ old('registration_url', $meetup->registration_url) }}" required>
                @if($errors->has('registration_url'))
                    <span class="text-danger">{{ $errors->first('registration_url') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.meetup.fields.registration_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="blurb">{{ trans('cruds.meetup.fields.blurb') }}</label>
                <input class="form-control {{ $errors->has('blurb') ? 'is-invalid' : '' }}" type="text" name="blurb" id="blurb" 
value="{{ old('blurb', $meetup->blurb) }}">
                @if($errors->has('blurb'))
                    <span class="text-danger">{{ $errors->first('blurb') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.meetup.fields.blurb_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="topics">{{ trans('cruds.meetup.fields.topics') }}</label>
                <input class="form-control {{ $errors->has('topics') ? 'is-invalid' : '' }}" type="text" name="topics" id="topics" 
value="{{ old('topics', $meetup->topics) }}">
                @if($errors->has('topics'))
                    <span class="text-danger">{{ $errors->first('topics') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.meetup.fields.topics_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time_start">{{ trans('cruds.meetup.fields.time_start') }}</label>
                <input class="form-control datetime {{ $errors->has('time_start') ? 'is-invalid' : '' }}" type="text" 
name="time_start" id="time_start" value="{{ old('time_start', $meetup->time_start) }}">
                @if($errors->has('time_start'))
                    <span class="text-danger">{{ $errors->first('time_start') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.meetup.fields.time_start_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time_end">{{ trans('cruds.meetup.fields.time_end') }}</label>
                <input class="form-control datetime {{ $errors->has('time_end') ? 'is-invalid' : '' }}" type="text" name="time_end" 
id="time_end" value="{{ old('time_end', $meetup->time_end) }}">
                @if($errors->has('time_end'))
                    <span class="text-danger">{{ $errors->first('time_end') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.meetup.fields.time_end_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="timezone">{{ trans('cruds.meetup.fields.timezone') }}</label>
                <input class="form-control {{ $errors->has('timezone') ? 'is-invalid' : '' }}" type="text" name="timezone" 
id="timezone" value="{{ old('timezone', $meetup->timezone) }}">
                @if($errors->has('timezone'))
                    <span class="text-danger">{{ $errors->first('timezone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.meetup.fields.timezone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration">{{ trans('cruds.meetup.fields.duration') }}</label>
                <input class="form-control {{ $errors->has('duration') ? 'is-invalid' : '' }}" type="text" name="duration" 
id="duration" value="{{ old('duration', $meetup->duration) }}">
                @if($errors->has('duration'))
                    <span class="text-danger">{{ $errors->first('duration') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.meetup.fields.duration_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="is_bootcamp">{{ trans('cruds.meetup.fields.is_bootcamp') }}</label>
                <input class="form-control {{ $errors->has('is_bootcamp') ? 'is-invalid' : '' }}" type="number" name="is_bootcamp" 
id="is_bootcamp" value="{{ old('is_bootcamp', $meetup->is_bootcamp) }}" step="1">
                @if($errors->has('is_bootcamp'))
                    <span class="text-danger">{{ $errors->first('is_bootcamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.meetup.fields.is_bootcamp_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="reg_is_open">{{ trans('cruds.meetup.fields.reg_is_open') }}</label>
                <input class="form-control {{ $errors->has('reg_is_open') ? 'is-invalid' : '' }}" type="number" name="reg_is_open" 
id="reg_is_open" value="{{ old('reg_is_open', $meetup->reg_is_open) }}" step="1" required>
                @if($errors->has('reg_is_open'))
                    <span class="text-danger">{{ $errors->first('reg_is_open') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.meetup.fields.reg_is_open_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="covid_status_form">{{ trans('cruds.meetup.fields.covid_status_form') }}</label>
                <input class="form-control {{ $errors->has('covid_status_form') ? 'is-invalid' : '' }}" type="text" 
name="covid_status_form" id="covid_status_form" value="{{ old('covid_status_form', $meetup->covid_status_form) }}">
                @if($errors->has('covid_status_form'))
                    <span class="text-danger">{{ $errors->first('covid_status_form') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.meetup.fields.covid_status_form_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
