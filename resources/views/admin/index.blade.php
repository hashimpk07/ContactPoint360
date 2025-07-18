@extends('layout')
@section('head')
    <title>{{__('Form Builder')}}</title>
@endsection

@section('content')
    <div class="card contactpointHeader">
        <div class="card-body">
            <a href="{{ URL('formbuilder') }}" class="btn btn-success">{{__('Create Forms')}}</a>
           
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
                                <a href="{{ URL('edit-form-builder', $form->id) }}" class="btn btn-primary">{{__('Edit')}}</a>

                                <!--<a href="{{ URL('read-form-builder', $form->id) }}" class="btn btn-primary">{{__('Show')}}</a> -->

                                <form method="POST" action="{{ URL('form-delete', $form->id) }}" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this product?')">{{__('Delete')}}</button>
                                </form>
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
