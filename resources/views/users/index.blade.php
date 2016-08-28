<?php
/**
 * Created by PhpStorm.
 * User: oshry
 * Date: 28/08/2016
 * Time: 2:25 AM
 */
?>
@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Items CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New Item</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $key => $item)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('users.show',$item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('users.edit',$item->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $item->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $users->render() !!}
@endsection