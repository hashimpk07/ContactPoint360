@extends('layout')
@section('head')
    <title>{{__('Form Builder')}}</title>
@endsection

@section('content')
    <div class="card contactpointHeader">
        <div class="card-body">
           
            @if (count($forms) > 0)
            <table class="table" style="margin-top:30px !important";>
                <thead>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Action')}}</th>
                </thead>
                <tbody>
                    @foreach ($forms as $form)
                        <tr>
                            <td style="width: 85%;" >{{ $form->name }}</td>
                            <td>
                                <a href="{{ URL('read-form-builder', $form->id) }}" class="btn btn-primary">{{__('Apply')}}</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else 
            <img src="{{url('/images/norecordfound.png')}}" class="no-data-found" style="width: 100%;margin-top: 25px;" />
    
            @endif
        </div>
    </div>
@endsection
