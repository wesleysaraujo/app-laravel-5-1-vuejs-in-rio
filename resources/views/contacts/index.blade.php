@extends('layouts.app')
@section('content')
    <div class="row">
        <?php
        $attributes = json_encode([
            'contacts' => $contacts,
            'urls' => [
                'list' => route('contacts::index'),
                'create' => route('contacts::create'),
                'update' => route('contacts::update'),
                'destroy' => route('contacts::destroy'),
            ]
        ]);
        ?>
        <contacts attributes="{{ $attributes }}"></contacts>
    </div>
@endsection