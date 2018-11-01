@extends("layouts/default")

@section("head")
    <title>{{ config('app.name') }}</title>
    <style>
    </style>
@stop

@section("content")
    <div class="container">
        <div class="row">
            <div class="col s6">
                <h3>Item Template Details</h3>
            </div>
            <div class="col s6 right">
                <a href="{{ route('itemtemplate.edit', [ 'itemtemplate' => $itemtemplate->id ] ) }}" class="btn light-blue waves-effect waves-dark mtop30">Edit</a>
                <a href="#" class="btn btn-link waves-effect waves-dark mtop30">Delete</a>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="card-panel">
                    <dl>
                        <dt>Name</dt>
                        <dd>{{ $itemtemplate->name ?? '-'}}</dd>
                        <dt>Quantity</dt>
                        <dd>{{ $itemtemplate->quantity ?? '-' }}</dd>
                        <dt>Price</dt>
                        <dd>{{ $itemtemplate->price ?? '-' }}</dd>
                        <dt>Description</dt>
                        <dd>{!! $itemtemplate->description !!}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <div id="delete-confirmation" class="modal">
        <div class="modal-content">
            <p>Delete Item Template?</p>
        </div>
        <div class="modal-footer">
            <form id="delete-itemtemplate-form" method="post" class="null-form">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button class="modal-action waves-effect black-text waves-green btn-flat btn-deletemodal itemtemplate-confirm-delete-btn" type="submit">Delete</button>
            </form>
            <a href="javascript:;" class=" modal-action modal-close waves-effect black-text waves-red btn-flat btn-deletemodal">Cancel</a>
        </div>
    </div>
@stop

@section("scripts")
    <script type="text/javascript">
        "use strict";
        $(function() {

        });
    </script>
@stop