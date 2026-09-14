@extends('errors.layout')

@section('code', '419')
@section('title', 'Sesi Halaman Berakhir')

@section('icon', 'fa-solid fa-hourglass-end')
@section('icon-bg', 'bg-purple-500/10 border-purple-500/20 text-purple-400')
@section('code-gradient', 'from-purple-400 to-indigo-400')
@section('btn-gradient', 'from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500')

@section('message', 'Sesi token keamanan (CSRF) Anda telah kedaluwarsa karena tidak ada aktivitas dalam waktu lama. Silakan muat ulang halaman.')
