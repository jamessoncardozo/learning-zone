@extends('errors::layout')

@section('title', __('Excesso de Requisições'))
@section('code', '429')
@section('message', __('Excesso de Requisições ao servidor. '))
