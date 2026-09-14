@extends('errors.layout')

@section('code', '500')
@section('title', 'Kesalahan Server Internal')

@section('icon', 'fa-solid fa-server')
@section('icon-bg', 'bg-gradient-to-br from-rose-500/20 via-pink-500/20 to-rose-500/10 border-rose-500/30 text-rose-400 shadow-lg shadow-rose-500/10')
@section('code-gradient', 'from-rose-400 via-pink-400 to-red-400')
@section('btn-gradient', 'from-rose-600 via-pink-600 to-red-500 hover:from-rose-500 hover:to-pink-500')

@section('message', 'Terjadi kendala teknis tak terduga pada peladen sistem ExpenseTrace. Tim pengembang telah mencatat log kesalahan ini.')
