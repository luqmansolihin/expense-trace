@extends('errors.layout')

@section('code', '500')
@section('title', 'Kesalahan Server Internal')

@section('icon', 'fa-solid fa-server')
@section('icon-bg', 'bg-rose-500/10 border-rose-500/20 text-rose-400')
@section('code-gradient', 'from-rose-400 to-pink-400')
@section('btn-gradient', 'from-rose-600 to-pink-600 hover:from-rose-500 hover:to-pink-500')

@section('message', 'Terjadi kendala teknis tak terduga pada peladen sistem ExpenseTrace. Tim pengembang telah mencatat log kesalahan ini.')
